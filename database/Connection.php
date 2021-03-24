<?php


namespace Orm\DB;


use Support\Environment;

class Connection
{
    public function __construct()
    {
        Environment::load(__DIR__ . '/../.env');
    }

    public static function connection($driver)
    {
        var_dump(config::get());
//        return (new PDO($this->env('DB_CONNECTION', 'mysql') . ":host=" . $this->env('DB_HOST') . ";dbname=" . $this->env('DB_DATABASE') . ";port=" . $this->env('DB_PORT'), $this->env('DB_USERNAME'), $this->env('DB_PASSWORD')));
    }
}