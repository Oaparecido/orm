<?php


namespace Tests\Unit\Database;


use Orm\DB\Connection;
use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function connection()
    {
        Connection::connection('mysql');
    }
}