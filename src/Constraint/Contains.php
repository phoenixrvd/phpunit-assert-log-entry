<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

class Contains extends HasPasses
{
    public function toString()
    {
        return sprintf('- %s string has no matched entries in log', $this->getLogLevel());
    }
}
