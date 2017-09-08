<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

class HasNoMatches extends HasNoPasses {

    public function toString() {
        return sprintf('- %s pattern contains in log messages', $this->getLogLevel());
    }

}