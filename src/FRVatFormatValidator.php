<?php

namespace rocketfellows\FRVatFormatValidator;

use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidator;

class FRVatFormatValidator extends CountryVatFormatValidator
{
    private const VAT_NUMBER_PATTERN = '/^(FR)?[0-9A-Z]{2}\d{9}$/';

    protected function isValidFormat(string $vatNumber): bool
    {
        return (bool) preg_match(self::VAT_NUMBER_PATTERN, $vatNumber);
    }
}
