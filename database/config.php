<?php

namespace Orm\DB;

use Support\Environment;

trait config
{
    public function __construct()
    {
        Environment::load(__DIR__ . '/../.env');
    }

    /**
     * @return array[]
     */
    public static function get(): array
    {
        return [
            'mysql' => [
                'host'     => Environment::get('DB_HOST', 'localhost'),
                'port'     => Environment::get('DB_PORT', '3306'),
                'database' => Environment::get('DB_DATABASE', 'default'),
                'username' => Environment::get('DB_USERNAME', 'root'),
                'password' => Environment::get('DB_PASSWORD', 'root'),
            ]
        ];
    }
}
