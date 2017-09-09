<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

class NotContains extends HasNoPasses
{
    public function toString()
    {
        return sprintf('- %s string contains in log messages', $this->getLogLevel());
    }
}
