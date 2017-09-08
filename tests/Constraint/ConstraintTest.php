<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

use PHPUnit\Framework\TestCase;

class ConstraintTest extends TestCase {

    public function testToString(){
        $logLevel = "Alert";
        
        self::assertToString(Contains::class, $logLevel, "- $logLevel string has no matched entries in log");
        self::assertToString(HasMatches::class, $logLevel, "- $logLevel pattern has no matched entries in log");
        self::assertToString(HasNoMatches::class, $logLevel, "- $logLevel pattern contains in log messages");
        self::assertToString(HasNoPasses::class, $logLevel, "- $logLevel entry in log should not be passed");
        self::assertToString(HasPasses::class, $logLevel, "- $logLevel entry in log has no passes");
        self::assertToString(HasRecords::class, $logLevel, "log must contain $logLevel" . 's');
        self::assertToString(HasNoRecords::class, $logLevel, "log must not contain $logLevel" . 's');
        self::assertToString(NotContains::class, $logLevel, "- $logLevel string contains in log messages");
    }

    public static function assertToString($class, $logLevel, $expected){
        /** @var Constraint $obj */
        $obj = new $class("has$logLevel");
        self::assertEquals($expected, $obj->toString());
    }

}
