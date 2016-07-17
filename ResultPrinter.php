<?php
/**
 * Copyright (c) 2014-2016 Ryan Parman
 */

namespace Skyzyx\ResultPrinter;

class ResultPrinter extends \PHPUnit_TextUI_ResultPrinter
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

    /**
     * {@inheritdoc}
     */
    protected function writeProgress($progress)
    {
        switch ($progress) {
            case 'E':
                return parent::writeProgress(sprintf('%s %s',
                    $this->errorEmoji,
                    $this->test_name_status));

            case 'F':
                return parent::writeProgress(sprintf('%s %s',
                    $this->failureEmoji,
                    $this->test_name_status));

            case 'I':
                return parent::writeProgress(sprintf('%s %s',
                    $this->incompleteEmoji,
                    $this->test_name_status));

            case 'R':
                return parent::writeProgress(sprintf('%s %s',
                    $this->riskyEmoji,
                    $this->test_name_status));

            case 'S':
                return parent::writeProgress(sprintf('%s %s',
                    $this->skippedEmoji,
                    $this->test_name_status));

            case '.':
                return parent::writeProgress(sprintf('%s %s',
                    $this->passEmoji,
                    $this->test_name_status));

            default:
                return parent::writeProgress(sprintf('%s %s',
                    $progress,
                    $this->test_name_status));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
    {
        if ($this->numTests == -1) {
            $this->numTests      = count($suite);
            $this->numTestsWidth = strlen((string) $this->numTests);
            $this->maxColumn     = 0;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function endTest(\PHPUnit_Framework_Test $test, $time)
    {
        $test_name = \PHPUnit_Util_Test::describe($test);

        if (!empty($test_name)) {
            $this->test_name_status = sprintf("%s (%s)\n",
                $test_name,
                sprintf("%s ms",
                    round($time * 1000)));
        }

        if (!$this->lastTestFailed) {
            $this->writeProgress('.');
        }

        if ($test instanceof \PHPUnit_Framework_TestCase) {
            $this->numAssertions += $test->getNumAssertions();
        } elseif ($test instanceof \PHPUnit_Extensions_PhptTestCase) {
            $this->numAssertions++;
        }

        $this->lastTestFailed = false;

        if ($test instanceof \PHPUnit_Framework_TestCase) {
            if (method_exists($this, 'hasExpectationOnOutput') && !$test->hasExpectationOnOutput()) {
                $this->write($test->getActualOutput());
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function writeProgressWithColor($color, $buffer)
    {
        return $this->writeProgress($buffer);
    }
}
