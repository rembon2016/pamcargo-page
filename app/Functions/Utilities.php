<?php

declare(strict_types=1);

namespace App\Functions;

class Utilities
{
    /**
     * @param string $path
     * @return string
     */
    public static function activateIfRouteIs(string $path)
    {
        return request()->routeIs($path) ? 'active' : '';
    }
}
