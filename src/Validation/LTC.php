<?php

namespace olakunlevpn\AddressValidator\Validation;

use olakunlevpn\AddressValidator\Utils\Bech32Decoder;
use olakunlevpn\AddressValidator\Utils\Bech32Exception;
use olakunlevpn\AddressValidator\Validation;

class LTC extends Validation {

    protected $base58PrefixToHexVersion = [
        'L' => '30',
        'M' => '32'
    ];

    public function validate($address) {
        $valid = parent::validate($address);

        if (!$valid) {
            // maybe it's a bech32 address
            try {
                $valid = is_array($decoded = Bech32Decoder::decodeRaw($address)) && 'ltc' === $decoded[0];
            } catch (Bech32Exception $exception) {

            }
        }

        return $valid;
    }

}
