<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_verificar_suma_de_2_mas_2_da_4()
    {
        $x = 2 + 3;
        $this->assertEquals(4, $x, 'hola');
    }
}
