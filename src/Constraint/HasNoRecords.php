<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

class HasNoRecords extends Constraint
{
    public function toString()
    {
        return sprintf('log must not contain %ss', $this->getLogLevel());
    }

    protected function matches($other)
    {
        return !$this->callHandlerMethod([]);
    }
}
