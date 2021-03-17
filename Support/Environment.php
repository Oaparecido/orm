<?php

namespace Support;

trait Environment
{
    public function env($get, $default = '')
    {
        if (!$_ENV[$get])
            $_ENV[$get] = $default;

        return $_ENV[$get];
    }
}