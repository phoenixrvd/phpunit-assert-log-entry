<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

class HasRecords extends Constraint
{
    public function toString()
    {
        return sprintf('log must contain %ss', $this->getLogLevel());
    }

    protected function matches($other)
    {
        return $this->callHandlerMethod([]);
    }
}
