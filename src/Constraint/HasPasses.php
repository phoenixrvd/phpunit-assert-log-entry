<?php

namespace PhoenixRVD\PHPUnitLogAssertions\Constraint;

class HasPasses extends Constraint {

    public function toString() {
        return sprintf('- %s entry in log has no passes', $this->getLogLevel());
    }

    protected function matches($other) {
        return $this->callHandlerMethod([$other]);
    }

}