<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

use Monolog\Handler\TestHandler;
use Monolog\Logger;

/**
 * @method static Contains Contains(string $methodName)
 * @method static HasMatches HasMatches(string $methodName)
 * @method static HasNoMatches HasNoMatches(string $methodName)
 * @method static HasNoPasses HasNoPasses(string $methodName)
 * @method static HasNoRecords HasNoRecords(string $methodName)
 * @method static HasPasses HasPasses(string $methodName)
 * @method static HasRecords HasRecords(string $methodName)
 * @method static NotContains NotContains(string $methodName)
 */
abstract class Constraint extends \PHPUnit\Framework\Constraint\Constraint {

    /**
     * @var TestHandler
     */
    protected static $logHandler;
    /**
     * @var
     */
    protected $function;

    public function __construct($function) {
        parent::__construct();
        $this->function = lcfirst(str_replace(['assertLogHasNo', 'assertLogHas'], 'has', $function));
        $this->function = str_replace('hastice', 'hasNotice', $this->function);
    }

    /**
     * @param Logger $logger
     *
     * @return TestHandler
     */
    public static function attachLogHandler(Logger $logger) {

        foreach ($logger->getHandlers() as $handler){
            if($handler instanceof TestHandler){
                self::$logHandler = $handler;
            }
        }

        if (empty(self::$logHandler)) {
            self::$logHandler = new TestHandler();
        }

        self::$logHandler->clear();

        $logger->pushHandler(self::$logHandler);

        return self::$logHandler;
    }

    public static function __callStatic($method, $args){
        $classname = __NAMESPACE__ . '\\' . $method;
        return new $classname($args[0]);
    }

    protected function callHandlerMethod($args) {
        return call_user_func_array([self::$logHandler, $this->function], $args);
    }

    protected function getLogLevel() {

        preg_match(
            '/(.*)(Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency)(.*)/',
            $this->function,
            $matches
        );

        return $matches[2];
    }

}