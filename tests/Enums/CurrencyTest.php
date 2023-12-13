<?php declare(strict_types=1);

namespace Mkioschi\Tests\Enums;

use Mkioschi\Enums\Currency;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
    public function test_should_be_able_to_create_a_valid_country()
    {
        $brazilianReal = Currency::BRL;
        $this->assertInstanceOf(Currency::class, $brazilianReal);
        $this->assertEquals('BRL', $brazilianReal->value);
        $this->assertEquals('Brazil Real', $brazilianReal->label());
    }
}