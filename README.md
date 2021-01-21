[![Packagist Stable Version](https://img.shields.io/packagist/v/olakunlevpn/address-validator.svg?style=flat-square&label=stable)](https://packagist.org/packages/olakunlevpn/address-validator)
[![Packagist downloads](https://img.shields.io/packagist/dt/olakunlevpn/address-validator.svg?style=flat-square)](https://packagist.org/packages/olakunlevpn/address-validator)
[![GPL Software License](https://img.shields.io/badge/license-GPL-blue.svg?style=flat-square)](LICENSE.md)



# Cryptocurrency AddressValidator

Easy to use PHP Bitcoin and Litecoin address validator.
One day I will add other crypto currencies. Or how about you? :)

## Usage

```
composer require olakunlevpn/address-validator

```

## Then.. 

```php
use olakunlevpn\AddressValidator\Validation;

$validator = Validation::make('BTC');
var_dump($validator->validate('1QLbGuc3WGKKKpLs4pBp9H6jiQ2MgPkXRp'));

````


Returns a boolean indicating if the address is valid or not.

## Return

```
bool(true) //valid wallet address

bool(false) //invalid wallet address
```