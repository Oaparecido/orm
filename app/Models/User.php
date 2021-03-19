<?php


namespace Models;


use Bootstrap\Model;

class User extends Model
{
    protected string $table = 'users';

    protected array $fields = [
        'name' => 'varchar(100)',
        'age' => 'int'
    ];

    public function test()
    {
        return true;
    }

}