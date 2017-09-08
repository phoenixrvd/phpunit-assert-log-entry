<?php

namespace PhoenixRVD\PHPUnitLogAssertions;

use Monolog\Logger;
use PhoenixRVD\PHPUnitLogAssertions\Constraint\Constraint;

trait LogAssertions
{

    /**
     * @param Logger $logger
     * @return void
     */
    public static function attachLogger(Logger $logger)
    {
        Constraint::attachLogHandler($logger);
    }

    public static function assertLogHasEmergency($record, $message = '')
    {
        static::assertThat($record, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasAlert($record, $message = '')
    {
        static::assertThat($record, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasCritical($record, $message = '')
    {
        static::assertThat($record, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasError($record, $message = '')
    {
        static::assertThat($record, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasWarning($record, $message = '')
    {
        static::assertThat($record, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNotice($record, $message = '')
    {
        static::assertThat($record, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasInfo($record, $message = '')
    {
        static::assertThat($record, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasDebug($record, $message = '')
    {
        static::assertThat($record, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasEmergencyRecords($message = '')
    {
        static::assertThat(null, Constraint::HasRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasAlertRecords($message = '')
    {
        static::assertThat(null, Constraint::HasRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasCriticalRecords($message = '')
    {
        static::assertThat(null, Constraint::HasRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasErrorRecords($message = '')
    {
        static::assertThat(null, Constraint::HasRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasWarningRecords($message = '')
    {
        static::assertThat(null, Constraint::HasRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasNoticeRecords($message = '')
    {
        static::assertThat(null, Constraint::HasRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasInfoRecords($message = '')
    {
        static::assertThat(null, Constraint::HasRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasDebugRecords($message = '')
    {
        static::assertThat(null, Constraint::HasRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasEmergencyThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::Contains(__FUNCTION__), $message);
    }

    public static function assertLogHasAlertThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::Contains(__FUNCTION__), $message);
    }

    public static function assertLogHasCriticalThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::Contains(__FUNCTION__), $message);
    }

    public static function assertLogHasErrorThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::Contains(__FUNCTION__), $message);
    }

    public static function assertLogHasWarningThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::Contains(__FUNCTION__), $message);
    }

    public static function assertLogHasNoticeThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::Contains(__FUNCTION__), $message);
    }

    public static function assertLogHasInfoThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::Contains(__FUNCTION__), $message);
    }

    public static function assertLogHasDebugThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::Contains(__FUNCTION__), $message);
    }

    public static function assertLogHasEmergencyThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasAlertThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasCriticalThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasErrorThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasWarningThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasNoticeThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasInfoThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasDebugThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasEmergencyThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasAlertThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasCriticalThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasErrorThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasWarningThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoticeThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasInfoThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasDebugThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasPasses(__FUNCTION__), $message);
    }


    public static function assertLogHasNoEmergency($record, $message = '')
    {
        static::assertThat($record, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoAlert($record, $message = '')
    {
        static::assertThat($record, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoCritical($record, $message = '')
    {
        static::assertThat($record, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoError($record, $message = '')
    {
        static::assertThat($record, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoWarning($record, $message = '')
    {
        static::assertThat($record, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoNotice($record, $message = '')
    {
        static::assertThat($record, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoInfo($record, $message = '')
    {
        static::assertThat($record, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoDebug($record, $message = '')
    {
        static::assertThat($record, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoEmergencyRecords($message = '')
    {
        static::assertThat(null, Constraint::HasNoRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasNoAlertRecords($message = '')
    {
        static::assertThat(null, Constraint::HasNoRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasNoCriticalRecords($message = '')
    {
        static::assertThat(null, Constraint::HasNoRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasNoErrorRecords($message = '')
    {
        static::assertThat(null, Constraint::HasNoRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasNoWarningRecords($message = '')
    {
        static::assertThat(null, Constraint::HasNoRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasNoNoticeRecords($message = '')
    {
        static::assertThat(null, Constraint::HasNoRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasNoInfoRecords($message = '')
    {
        static::assertThat(null, Constraint::HasNoRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasNoDebugRecords($message = '')
    {
        static::assertThat(null, Constraint::HasNoRecords(__FUNCTION__), $message);
    }

    public static function assertLogHasNoEmergencyThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::NotContains(__FUNCTION__), $message);
    }

    public static function assertLogHasNoAlertThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::NotContains(__FUNCTION__), $message);
    }

    public static function assertLogHasNoCriticalThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::NotContains(__FUNCTION__), $message);
    }

    public static function assertLogHasNoErrorThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::NotContains(__FUNCTION__), $message);
    }

    public static function assertLogHasNoWarningThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::NotContains(__FUNCTION__), $message);
    }

    public static function assertLogHasNoNoticeThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::NotContains(__FUNCTION__), $message);
    }

    public static function assertLogHasNoInfoThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::NotContains(__FUNCTION__), $message);
    }

    public static function assertLogHasNoDebugThatContains($expected, $message = '')
    {
        static::assertThat($expected, Constraint::NotContains(__FUNCTION__), $message);
    }

    public static function assertLogHasNoEmergencyThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasNoAlertThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasNoCriticalThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasNoErrorThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasNoWarningThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasNoNoticeThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasNoInfoThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasNoDebugThatMatches($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoMatches(__FUNCTION__), $message);
    }

    public static function assertLogHasNoEmergencyThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoAlertThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoCriticalThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoErrorThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoWarningThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoNoticeThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoInfoThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

    public static function assertLogHasNoDebugThatPasses($expected, $message = '')
    {
        static::assertThat($expected, Constraint::HasNoPasses(__FUNCTION__), $message);
    }

}