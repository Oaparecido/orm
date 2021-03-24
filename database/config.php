<?php

namespace Orm\Config;

use Support\Environment;

trait config
{
    use Environment;

    /**
     * @return array[]
     */
    public static function get(): array
    {
        return [
            'mysql' => [
                'host'     => $this->env('DB_HOST', 'localhost'),
                'port'     => $this->env('DB_PORT', '3306'),
                'database' => $this->env('DB_DATABASE', 'default'),
                'username' => $this->env('DB_USERNAME', 'root'),
                'password' => $this->env('DB_PASSWORD', 'root'),
            ]
        ];
    }
}
