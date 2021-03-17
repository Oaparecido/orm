<?php

namespace Support;

trait config
{
    public function env($get, $default = '')
    {
        if (!$_ENV[$get])
            $_ENV[$get] = $default;

        return $_ENV[$get];
    }
}