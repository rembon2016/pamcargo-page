<?php

declare(strict_types=1);

namespace App\Functions;

class Utilities
{
    /**
     * @param string $path
     * @param string $action
     * @return string
     */
    public static function activateIfRouteIs(string $path, string $action = 'active'): string
    {
        return request()->routeIs($path) ? $action : '';
    }
}
