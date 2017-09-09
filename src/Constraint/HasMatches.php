<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

class HasMatches extends HasPasses
{
    public function toString()
    {
        return sprintf('- %s pattern has no matched entries in log', $this->getLogLevel());
    }
}
