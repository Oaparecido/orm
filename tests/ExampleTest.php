<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function example()
    {
        $count = 0;

        for ($i = 0; $i < 10; $i++) {
            $count = $i;
        }

        assertEquals(9, $count);
    }
}