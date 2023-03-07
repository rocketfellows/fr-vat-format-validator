<?php

namespace rocketfellows\FRVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class FRVatFormatValidatorTest extends TestCase
{
    /**
     * @var FRVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new FRVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'FR12345678901',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'FRX1234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'FR1X234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'FRXX234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678901',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'X1234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1X123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'XX123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'FR123456789011',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'FR1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789011',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'FRX12345678900',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'FRX123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'FR1X2345678900',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'FR1X23456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'FRXX2345678900',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'FRXX23456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'X12345678900',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1X1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1X12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'XX1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'XX12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DEXX123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
