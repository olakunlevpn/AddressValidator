<?php

namespace olakunlevpn\AddressValidator\Validation;

use olakunlevpn\AddressValidator\Validation;

class DOGE extends Validation {

    protected $base58PrefixToHexVersion = [
        'D' => '1E',
    ];

}
