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
    public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
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
