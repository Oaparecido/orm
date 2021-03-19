<?php


namespace Tests\Unit;


use Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function create()
    {
        $user = new User();

        $this->assertTrue($user->test());
    }
}