<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

use Monolog\Handler\TestHandler;
use Monolog\Logger;

/**
 * @method Contains Contains(string $methodName)
 * @method HasMatches HasMatches(string $methodName)
 * @method HasNoMatches HasNoMatches(string $methodName)
 * @method HasNoPasses HasNoPasses(string $methodName)
 * @method HasNoRecords HasNoRecords(string $methodName)
 * @method HasPasses HasPasses(string $methodName)
 * @method HasRecords HasRecords(string $methodName)
 * @method NotContains NotContains(string $methodName)
 */
class Factory {

    /**
     * @var TestHandler
     */
    protected static $logHandler;

    /**
     * @param Logger $logger
     *
     * @return TestHandler
     */
    public function attachLogHandler(Logger $logger) {

        foreach ($logger->getHandlers() as $handler) {
            if ($handler instanceof TestHandler) {
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

    public function __call($method, $args) {
        $classname = __NAMESPACE__ . '\\' . $method;

        $methodName = lcfirst(str_replace(['assertLogHasNo', 'assertLogHas'], 'has', $args[0]));
        $methodName = str_replace('hastice', 'hasNotice', $methodName);

        return new $classname(self::$logHandler, $methodName);
    }
}