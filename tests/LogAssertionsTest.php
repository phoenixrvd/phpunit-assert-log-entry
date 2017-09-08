<?php

namespace PhoenixRVD\PHPUnitLogAssertions;

use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class LogAssertionsTest extends TestCase
{

    use LogAssertions;

    /**
     * @dataProvider methodNameProvider
     */
    public function testAssertions($method){

        // Get a Monolog instance
        $logger = new Logger(__CLASS__);

        // Register a logger in test case handler
        self::attachLogger($logger);
        $loggerMethod = strtolower($method);
        $logger->$loggerMethod('foo');
        self::assertAllMethodCalls($method);

        // Reset old Entries and run again
        self::attachLogger($logger);
        self::assertAllMethodCalls($method, 'No');
    }

    private static function assertAllMethodCalls($method, $prefix = ''){
        self::assertMethodCall("assertLogHas$prefix$method", 'foo');
        self::assertMethodCall("assertLogHas$prefix$method" . "Records", []);
        self::assertMethodCall("assertLogHas$prefix$method" . "ThatContains", 'oo');
        self::assertMethodCall("assertLogHas$prefix$method" . "ThatMatches", '/o/');
        self::assertMethodCall("assertLogHas$prefix$method" . "ThatPasses", function($rec, $entryNr){
            return $rec['message'] === 'foo';
        });
    }

    private static function assertMethodCall($methodName, $argument){
        call_user_func([self::class, $methodName], $argument);
    }

    public function methodNameProvider(){
        $methods = 'Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency';
        $data = [];
        foreach (explode('|', $methods) as $method){
            $data[] = [$method];
        }
        return $data;
    }

}
