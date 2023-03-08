# France vat format validator

![Code Coverage Badge](./badge.svg)

This component provides France vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/fr-vat-format-validator
```

## Usage example

Valid France vat number:

```php
$validator = new FRVatFormatValidator();
$validator->isValid('FR12345678901');
$validator->isValid('FRX1234567890');
$validator->isValid('FR1X234567890');
$validator->isValid('FRXX234567890');
$validator->isValid('12345678901');
$validator->isValid('X1234567890');
$validator->isValid('1X123456789');
$validator->isValid('XX123456789');
```

Returns:

```shell
true
true
true
true
true
true
true
true
```

Invalid France vat number:

```php
$validator = new FRVatFormatValidator();
$validator->isValid('FR123456789011');
$validator->isValid('FR1234567890');
$validator->isValid('123456789011');
$validator->isValid('1234567890');
$validator->isValid('FRX12345678900');
$validator->isValid('FRX123456789');
$validator->isValid('FR1X2345678900');
$validator->isValid('FR1X23456789');
$validator->isValid('FRXX2345678900');
$validator->isValid('FRXX23456789');
$validator->isValid('X12345678900');
$validator->isValid('1X1234567890');
$validator->isValid('1X12345678');
$validator->isValid('XX1234567890');
$validator->isValid('XX12345678');
$validator->isValid('DEXX123456789');
```

```shell
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
