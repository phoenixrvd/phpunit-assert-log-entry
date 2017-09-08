# PHPUnit assert log entry


[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg)](https://php.net/)
[![Latest Stable Version](https://poser.pugx.org/phoenixrvd/phpunit-assert-log-entry/v/stable.svg)](https://packagist.org/packages/phoenixrvd/phpunit-assert-log-entry)
[![composer.lock](https://poser.pugx.org/phoenixrvd/phpunit-assert-log-entry/composerlock)](https://packagist.org/packages/phoenixrvd/phpunit-assert-log-entry)
[![License](https://poser.pugx.org/phoenixrvd/phpunit-assert-log-entry/license)](https://packagist.org/packages/phoenixrvd/phpunit-assert-log-entry)

[![Build Status](https://travis-ci.org/phoenixrvd/phpunit-assert-log-entry.png?branch=master)](https://travis-ci.org/phoenixrvd/phpunit-assert-log-entry)
[![Code Climate](https://codeclimate.com/github/phoenixrvd/phpunit-assert-log-entry.png)](https://codeclimate.com/github/phoenixrvd/phpunit-assert-log-entry)
[![StyleCI](https://styleci.io/repos/87853601/shield?branch=master)](https://styleci.io/repos/87853601)
[![Test Coverage](https://codeclimate.com/github/phoenixrvd/phpunit-assert-log-entry/badges/coverage.svg)](https://codeclimate.com/github/phoenixrvd/phpunit-assert-log-entry/coverage)
[![Latest Unstable Version](https://poser.pugx.org/phoenixrvd/phpunit-assert-log-entry/v/unstable.svg)](https://packagist.org/packages/phoenixrvd/phpunit-assert-log-entry)


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
composer require phoenixrvd/phpunit-assert-log-entry
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
