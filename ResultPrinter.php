<?php
/**
 * Copyright (c) 2014-2020 Ryan Parman <http://ryanparman.com>
 */
namespace Skyzyx\ResultPrinter;

use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Runner\PhptTestCase;
use PHPUnit\TextUI\DefaultResultPrinter as PPrinter;
use PHPUnit\Util\Test as TestUtil;

/**
 * Class ResultPrinter
 * @package Skyzyx\ResultPrinter
 */
class ResultPrinter extends PPrinter
{
    /** @var string */
    protected $test_name_status = '';

    /** @var string */
    protected $errorEmoji = "!"; // Single exclamation

    /** @var string */
    protected $failureEmoji = "\xE2\x80\xBC"; // Double exclamation

    /** @var string */
    protected $incompleteEmoji = "I";

    /** @var string */
    protected $riskyEmoji = "R";

    /** @var string */
    protected $skippedEmoji = "S";

    /** @var string */
    protected $passEmoji = "\xE2\x9c\x93"; // Checkmark

    /** @var int  */
    protected $numTestsRun;

    /** @var int  */
    protected $numTests;

    /** @var int  */
    protected $column;

    /** @var int */
    protected $numTestsWidth;

    /** @var int */
    protected $maxColumn;

    /** @var bool */
    protected $lastTestFailed;

    /** @var int */
    protected $numAssertions;

    /**
     * @param string $progress
     */
    protected function writeProgress(string $progress): void
    {
        switch ($progress) {
            case 'E':
                $icon = $this->errorEmoji;
                break;
            case 'F':
                $icon = $this->failureEmoji;
                break;
            case 'I':
                $icon = $this->incompleteEmoji;
                break;
            case 'R':
                $icon = $this->riskyEmoji;
                break;
            case 'S':
                $icon = $this->skippedEmoji;
                break;
            case '.':
                $icon = $this->passEmoji;
                break;
            default:
                $icon = $progress;
        }

        $this->column++;
        $this->numTestsRun++;

        $this->write(sprintf(
            '%' . $this->numTestsWidth . 'd/%' . $this->numTestsWidth . 'd (%3s%%) %s %s',
            $this->numTestsRun,
            $this->numTests,
            floor(($this->numTestsRun / $this->numTests) * 100),
            $icon,
            $this->test_name_status
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function startTestSuite(TestSuite $suite): void
    {
        if ($this->numTests == -1) {
            $this->numTests      = count($suite);
            $this->numTestsWidth = strlen((string) $this->numTests);
            $this->maxColumn     = 1000;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function endTest(Test $test, $time): void
    {
        $test_name = TestUtil::describe($test);

        if (!empty($test_name)) {
            $this->test_name_status = sprintf(
                "%s::%s (%s)\n",
                $test_name[0],
                $test_name[1],
                sprintf("%s ms",
                round($time * 1000))
            );
        }

        if (!$this->lastTestFailed) {
            $this->writeProgress('.');
        }

        if ($test instanceof TestCase) {
            $this->numAssertions += $test->getNumAssertions();
        } elseif ($test instanceof PhptTestCase) {
            $this->numAssertions++;
        }

        $this->lastTestFailed = false;

        if ($test instanceof TestCase) {
            if (method_exists($this, 'hasExpectationOnOutput') && !$test->hasExpectationOnOutput()) {
                $this->write($test->getActualOutput());
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function writeProgressWithColor($color, $buffer): void
    {
        $this->writeProgress($buffer);
    }
}
