# PHPUnit Result Printer

[![Source](http://img.shields.io/badge/source-skyzyx/phpunit-result-printer-blue.svg?style=flat-square)](https://github.com/skyzyx/phpunit-result-printer)
[![Latest Stable Version](http://img.shields.io/packagist/v/skyzyx/phpunit-result-printer.svg?style=flat-square)](https://packagist.org/packages/skyzyx/phpunit-result-printer)
[![Total Downloads](http://img.shields.io/packagist/dt/skyzyx/phpunit-result-printer.svg?style=flat-square)](https://packagist.org/packages/skyzyx/phpunit-result-printer)
[![Open Issues](http://img.shields.io/github/issues/skyzyx/phpunit-result-printer.svg?style=flat-square)](https://github.com/skyzyx/phpunit-result-printer/issues)
[![License](http://img.shields.io/packagist/l/skyzyx/phpunit-result-printer-blue.svg?style=flat-square)](https://packagist.org/packages/skyzyx/phpunit-result-printer)
[![Author](http://img.shields.io/badge/author-@skyzyx-blue.svg?style=flat-square)](https://twitter.com/skyzyx)

A custom result printer for PHPUnit.


## Examples

Here is the output from using this with [skyzyx/php-strong-types](https://github.com/skyzyx/php-strong-types).

```
PHPUnit 5.4.6 by Sebastian Bergmann and contributors.

Runtime:       PHP 5.6.23 with Xdebug 2.4.0
Configuration: /Library/WebServer/Documents/php-strong-types/phpunit.xml.dist

✓ Skyzyx\Tests\StrongTypes\AbstractTest::testTypeMap (55 ms)
✓ Skyzyx\Tests\StrongTypes\AbstractTest::testNativeType (48 ms)
✓ Skyzyx\Tests\StrongTypes\BooleanTest::testBooleanType (59 ms)
✓ Skyzyx\Tests\StrongTypes\BooleanTest::testBooleanException (51 ms)
✓ Skyzyx\Tests\StrongTypes\BooleanTest::testBooleanToString (47 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionType (63 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionCount (58 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionAppend (53 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionGetInvalid (56 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionRemove (55 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionSeek (68 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionToString (53 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionDeepArray (58 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionDeepArrayFail (68 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionExists (64 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionSeekable (59 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionForeach (53 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidation (62 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidationStringException (70 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidationIntegerException (62 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidationIntegerException2 (60 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidationMissingRequiredException (65 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidationDisallowedException (58 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionSeekableException (53 ms)
✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionException (63 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #0 ('   Just a string') (49 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #1 (' abigail@example.com') (51 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #2 (' joeblow@apache.org') (57 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #3 ('$@[]') (50 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #4 ('':;') (51 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #5 ('()@example.com') (49 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #6 ('(comment)') (51 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #7 ('(foo) abigail@example.com') (52 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #8 ('*()@[]') (55 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #9 ('@example.com') (61 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #10 ('"127.0.0.1"@[127.0.0.1]') (52 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #11 ('":sysmail"@  Some-Group. Some-Org') (49 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #12 ('""test\""blah""@example.com') (54 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #13 ('"\""@foo.bar') (56 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #14 ('"Abi"gail" <abigail@example.com>') (49 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #15 ('"Abi\"gail" <abigail@example.com>') (50 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #16 ('"Abigail "<abigail@example.com>') (49 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #17 ('"George, Ted" <Shared@Group.Arpanet>') (57 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #18 ('"Joe & J. Harvey" <example @Org>') (49 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #19 ('"Joe & J. Harvey"\x0D\x0A    ...@ Org>') (51 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #20 ('"Joe &\x0D\x0A J. Harvey" <ddd \@ Org>') (50 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #21 ('"joe!"@apache.org') (48 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #22 ('"joe%45"@apache.org') (50 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #23 ('"joe&"@apache.org') (49 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #24 ('"joe'"@apache.org') (50 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #25 ('"joe("@apache.org') (58 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #26 ('"joe)"@apache.org') (50 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #27 ('"joe*"@apache.org') (56 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #28 ('"joe+"@apache.org') (57 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #29 ('"joe,"@apache.org') (56 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #30 ('"joe."@apache.org') (49 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #31 ('"joe;"@apache.org') (55 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #32 ('"joe="@apache.org') (53 ms)
✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #33 ('"joe?"@apache.org') (50 ms)
```

## Installation

Using [Composer]:
```bash
composer require skyzyx/phpunit-result-printer=^1.0
```

And include it in your scripts:

```php
require_once 'vendor/autoload.php';
```


## Testing

Firstly, run `composer install --optimize-autoloader` to download and install the dependencies.

You can run the tests as follows:
```bash
bin/phpunit
```


## Contributing
Here's the process for contributing:

1. Fork PHPUnit Result Printer to your GitHub account.
2. Clone your GitHub copy of the repository into your local workspace.
3. Write code, fix bugs, and add tests with 100% code coverage.
4. Commit your changes to your local workspace and push them up to your GitHub copy.
5. You submit a GitHub pull request with a description of what the change is.
6. The contribution is reviewed. Maybe there will be some banter back-and-forth in the comments.
7. If all goes well, your pull request will be accepted and your changes are merged in.


## Authors, Copyright & Licensing

* Copyright (c) 2014-2016 [Ryan Parman](http://ryanparman.com).

See also the list of [contributors](https://github.com/skyzyx/phpunit-result-printer/contributors) who participated in this project.

Licensed for use under the terms of the [MIT] license.


## Coding Standards

PSR-0/1/2 are a solid foundation, but are not an entire coding style by themselves. I have taken the time to document all of the nitpicky patterns and nuances of my personal coding style. It goes well-beyond brace placement and tabs vs. spaces to cover topics such as docblock annotations, ternary operations and which variation of English to use. It aims for thoroughness and pedanticism over hoping that we can all get along.

<https://github.com/skyzyx/php-coding-standards>

  [PHP]: http://php.net
  [Composer]: https://getcomposer.org
  [MIT]: http://www.opensource.org/licenses/mit-license.php
  [Apache 2.0]: http://opensource.org/licenses/Apache-2.0
