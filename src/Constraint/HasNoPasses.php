<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

class HasNoPasses extends Constraint
{
    public function toString()
    {
        return sprintf('- %s entry in log should not be passed', $this->getLogLevel());
    }

    protected function matches($other)
    {
        return !$this->callHandlerMethod([$other]);
    }
}
