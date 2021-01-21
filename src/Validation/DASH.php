<?php

namespace olakunlevpn\AddressValidator\Validation;

use olakunlevpn\AddressValidator\Validation;

class DASH extends Validation {

    const VERSION_P2PKH = '4C';
    const VERSION_P2SH = '10';

    protected $base58PrefixToHexVersion = [
        'X' => self::VERSION_P2PKH,
        '7' => self::VERSION_P2SH
    ];

}
