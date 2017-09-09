<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

use Monolog\Handler\TestHandler;

abstract class Constraint extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var
     */
    protected $methodName;
    /**
     * @var TestHandler
     */
    protected $testHandler;

    public function __construct(TestHandler $testHandler, $methodName)
    {
        parent::__construct();
        $this->testHandler = $testHandler;
        $this->methodName = $methodName;
    }

    protected function callHandlerMethod($args)
    {
        return call_user_func_array(
            [$this->testHandler, $this->methodName],
            $args
        );
    }

    protected function getLogLevel()
    {
        preg_match(
            '/(.*)(Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency)(.*)/',
            $this->methodName,
            $matches
        );

        return $matches[2];
    }
}
