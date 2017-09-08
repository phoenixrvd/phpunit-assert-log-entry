# PHPUnit assert log entry

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->


- [Installation](#installation)
- [Example](#example)
- [Testing](#testing)
- [Copyright and license](#copyright-and-license)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

This library extends [PHPUnit](https://github.com/sebastianbergmann/phpunit) with asserting 
from [Monolog](https://github.com/Seldaek/monolog) logging entries.

## Installation

Install the latest version with

```bash
composer require phoenixrvd/phpunit_log_assertions
```
## Example

```php
<?php

use PHPUnit\Framework\TestCase;

class LogAssertionsTest extends TestCase
{
    use \PhoenixRVD\PHPUnitLogAssertions\LogAssertions;
    
    public function testFoo(){
        // Get a Monolog instance
        $logger = new \Monolog\Logger(__CLASS__);

        // Register a logger in test case handler
        self::attachLogger($logger);
        $logger->debug('foo');
        self::assertLogHasDebugRecords();
        self::assertLogHasDebug('foo');
    }
    
}
```

## Testing

```bash
composer phpunit_log_assertions:test
```

## Copyright and license

Code released under the [MIT License](LICENSE). 