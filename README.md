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

Runtime:       PHP 7.0.9 with Xdebug 2.4.1
Configuration: /Library/WebServer/Documents/php-strong-types/phpunit.xml.dist

  1/544 (  0%) ✓ Skyzyx\Tests\StrongTypes\AbstractTest::testTypeMap (72 ms)
  2/544 (  0%) ✓ Skyzyx\Tests\StrongTypes\AbstractTest::testNativeType (103 ms)
  3/544 (  0%) ✓ Skyzyx\Tests\StrongTypes\BooleanTest::testBooleanType (90 ms)
  4/544 (  0%) ✓ Skyzyx\Tests\StrongTypes\BooleanTest::testBooleanException (114 ms)
  5/544 (  0%) ✓ Skyzyx\Tests\StrongTypes\BooleanTest::testBooleanToString (85 ms)
  6/544 (  1%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionType (99 ms)
  7/544 (  1%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionCount (85 ms)
  8/544 (  1%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionAppend (86 ms)
  9/544 (  1%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionGetInvalid (78 ms)
 10/544 (  1%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionRemove (91 ms)
 11/544 (  2%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionSeek (86 ms)
 12/544 (  2%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionToString (76 ms)
 13/544 (  2%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionDeepArray (82 ms)
 14/544 (  2%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionDeepArrayFail (90 ms)
 15/544 (  2%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionExists (82 ms)
 16/544 (  2%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionSeekable (94 ms)
 17/544 (  3%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionForeach (80 ms)
 18/544 (  3%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidation (100 ms)
 19/544 (  3%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidationStringException (93 ms)
 20/544 (  3%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidationIntegerException (86 ms)
 21/544 (  3%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidationIntegerException2 (93 ms)
 22/544 (  4%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidationMissingRequiredException (85 ms)
 23/544 (  4%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionValidationDisallowedException (87 ms)
 24/544 (  4%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionSeekableException (74 ms)
 25/544 (  4%) ✓ Skyzyx\Tests\StrongTypes\CollectionTest::testCollectionException (81 ms)
 26/544 (  4%) ✓ Skyzyx\Tests\StrongTypes\EnumTest::testEnumType (74 ms)
 27/544 (  4%) ✓ Skyzyx\Tests\StrongTypes\EnumTest::testEnumToString (75 ms)
 28/544 (  5%) ✓ Skyzyx\Tests\StrongTypes\EnumTest::testEnumValidate (60 ms)
 29/544 (  5%) ✓ Skyzyx\Tests\StrongTypes\FloatTest::testFloatType (61 ms)
 30/544 (  5%) ✓ Skyzyx\Tests\StrongTypes\FloatTest::testFloatExceptionInteger (65 ms)
 31/544 (  5%) ✓ Skyzyx\Tests\StrongTypes\FloatTest::testFloatExceptionString (66 ms)
 32/544 (  5%) ✓ Skyzyx\Tests\StrongTypes\FloatTest::testFloatToString (57 ms)
 33/544 (  6%) ✓ Skyzyx\Tests\StrongTypes\IntegerTest::testIntegerType (63 ms)
 34/544 (  6%) ✓ Skyzyx\Tests\StrongTypes\IntegerTest::testIntegerExceptionString (66 ms)
 35/544 (  6%) ✓ Skyzyx\Tests\StrongTypes\IntegerTest::testIntegerExceptionFloat (66 ms)
 36/544 (  6%) ✓ Skyzyx\Tests\StrongTypes\IntegerTest::testIntegerToString (59 ms)
 37/544 (  6%) ✓ Skyzyx\Tests\StrongTypes\ListCollectionTest::testListCollectionValid (60 ms)
 38/544 (  6%) ✓ Skyzyx\Tests\StrongTypes\ListCollectionTest::testListCollectionException (63 ms)
 39/544 (  7%) ✓ Skyzyx\Tests\StrongTypes\MapCollectionTest::testMapCollectionValid (63 ms)
 40/544 (  7%) ✓ Skyzyx\Tests\StrongTypes\MapCollectionTest::testMapCollectionException (66 ms)
 41/544 (  7%) ✓ Skyzyx\Tests\StrongTypes\OneOfCollectionTest::testOneOfCollectionValid1 (70 ms)
 42/544 (  7%) ✓ Skyzyx\Tests\StrongTypes\OneOfCollectionTest::testOneOfCollectionValid2 (64 ms)
 43/544 (  7%) ✓ Skyzyx\Tests\StrongTypes\OneOfCollectionTest::testOneOfCollectionFail (61 ms)
 44/544 (  8%) ✓ Skyzyx\Tests\StrongTypes\OneOfCollectionTest::testOneOfCollectionFail2 (67 ms)
 45/544 (  8%) ✓ Skyzyx\Tests\StrongTypes\SetCollectionTest::testSetCollectionValid (60 ms)
 46/544 (  8%) ✓ Skyzyx\Tests\StrongTypes\SetCollectionTest::testSetCollectionAdd (65 ms)
 47/544 (  8%) ✓ Skyzyx\Tests\StrongTypes\SetCollectionTest::testSetCollectionException (62 ms)
 48/544 (  8%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testStringType (64 ms)
 49/544 (  9%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testStringException (63 ms)
 50/544 (  9%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testClassOrType (117 ms)
 51/544 (  9%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testExactLengthOk (73 ms)
 52/544 (  9%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testExactLengthFail (71 ms)
 53/544 (  9%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testExactLengthFail2 (77 ms)
 54/544 (  9%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testLengthOk (70 ms)
 55/544 ( 10%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testLengthOk2 (64 ms)
 56/544 ( 10%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testMinLengthFail (62 ms)
 57/544 ( 10%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testMaxLengthFail (65 ms)
 58/544 ( 10%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testMaxLengthFail2 (64 ms)
 59/544 ( 10%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testMinUtf8LengthOk (65 ms)
 60/544 ( 11%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testMaxUtf8LengthOk (66 ms)
 61/544 ( 11%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testAsciiFromUnicode (63 ms)
 62/544 ( 11%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testAsciiFromUnicode2 (67 ms)
 63/544 ( 11%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testUtf8FromUnicode (63 ms)
 64/544 ( 11%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testAsciiFromBytes (63 ms)
 65/544 ( 11%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testUtf8FromBytes (67 ms)
 66/544 ( 12%) ✓ Skyzyx\Tests\StrongTypes\StringTest::testUtf8FromBytes2 (68 ms)
 67/544 ( 12%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #0 ('   Just a string') (66 ms)
 68/544 ( 12%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #1 (' abigail@example.com') (67 ms)
 69/544 ( 12%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #2 (' joeblow@apache.org') (67 ms)
 70/544 ( 12%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #3 ('$@[]') (63 ms)
 71/544 ( 13%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #4 ('':;') (63 ms)
 72/544 ( 13%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #5 ('()@example.com') (62 ms)
 73/544 ( 13%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #6 ('(comment)') (67 ms)
 74/544 ( 13%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #7 ('(foo) abigail@example.com') (66 ms)
 75/544 ( 13%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #8 ('*()@[]') (74 ms)
 76/544 ( 13%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #9 ('@example.com') (68 ms)
 77/544 ( 14%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #10 ('"127.0.0.1"@[127.0.0.1]') (65 ms)
 78/544 ( 14%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #11 ('":sysmail"@  Some-Group. Some-Org') (64 ms)
 79/544 ( 14%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #12 ('""test\""blah""@example.com') (62 ms)
 80/544 ( 14%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #13 ('"\""@foo.bar') (63 ms)
 81/544 ( 14%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #14 ('"Abi"gail" <abigail@example.com>') (60 ms)
 82/544 ( 15%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #15 ('"Abi\"gail" <abigail@example.com>') (63 ms)
 83/544 ( 15%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #16 ('"Abigail "<abigail@example.com>') (60 ms)
 84/544 ( 15%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #17 ('"George, Ted" <Shared@Group.Arpanet>') (65 ms)
 85/544 ( 15%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #18 ('"Joe & J. Harvey" <example @Org>') (63 ms)
 86/544 ( 15%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #19 ('"Joe & J. Harvey"\x0D\x0A    ...@ Org>') (64 ms)
 87/544 ( 15%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #20 ('"Joe &\x0D\x0A J. Harvey" <ddd \@ Org>') (62 ms)
 88/544 ( 16%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #21 ('"joe!"@apache.org') (63 ms)
 89/544 ( 16%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #22 ('"joe%45"@apache.org') (61 ms)
 90/544 ( 16%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #23 ('"joe&"@apache.org') (64 ms)
 91/544 ( 16%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #24 ('"joe'"@apache.org') (63 ms)
 92/544 ( 16%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #25 ('"joe("@apache.org') (60 ms)
 93/544 ( 17%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #26 ('"joe)"@apache.org') (65 ms)
 94/544 ( 17%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #27 ('"joe*"@apache.org') (60 ms)
 95/544 ( 17%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #28 ('"joe+"@apache.org') (63 ms)
 96/544 ( 17%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #29 ('"joe,"@apache.org') (63 ms)
 97/544 ( 17%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #30 ('"joe."@apache.org') (62 ms)
 98/544 ( 18%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #31 ('"joe;"@apache.org') (77 ms)
 99/544 ( 18%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #32 ('"joe="@apache.org') (66 ms)
100/544 ( 18%) ✓ Skyzyx\Tests\StrongTypes\StringType\EmailInvalidTest::testValidate with data set #33 ('"joe?"@apache.org') (65 ms)
```

## Installation

Using [Composer]:
```bash
composer require skyzyx/phpunit-result-printer=^2.0
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

* Copyright (c) 2014-2017 [Ryan Parman](http://ryanparman.com).

See also the list of [contributors](https://github.com/skyzyx/phpunit-result-printer/contributors) who participated in this project.

Licensed for use under the terms of the [MIT] license.


## Coding Standards

PSR-0/1/2 are a solid foundation, but are not an entire coding style by themselves. I have taken the time to document all of the nitpicky patterns and nuances of my personal coding style. It goes well-beyond brace placement and tabs vs. spaces to cover topics such as docblock annotations, ternary operations and which variation of English to use. It aims for thoroughness and pedanticism over hoping that we can all get along.

<https://github.com/skyzyx/php-coding-standards>

  [PHP]: http://php.net
  [Composer]: https://getcomposer.org
  [MIT]: http://www.opensource.org/licenses/mit-license.php
  [Apache 2.0]: http://opensource.org/licenses/Apache-2.0
