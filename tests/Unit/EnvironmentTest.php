<?php


namespace Tests\Unit;


use PHPUnit\Framework\TestCase;
use Support\Environment;

class EnvironmentTest extends TestCase
{
    use Environment;

    protected function setUp(): void
    {
        $this->load(__DIR__ . '/../../.env');
        parent::setUp();
    }

    /**
     * Test read Environments variable
     * @test
     */
    public function make()
    {
        $this->assertEquals('mysql', $this->env('DB_CONNECTION'));
        $this->assertEquals(3306, $this->env('DB_PORT'));
        $this->assertEquals('database', $this->env('DB_HOST'));
        $this->assertEquals('local', $this->env('DB_DATABASE'));
        $this->assertEquals('root', $this->env('DB_USERNAME'));
        $this->assertEquals('root', $this->env('DB_PASSWORD'));
    }
}