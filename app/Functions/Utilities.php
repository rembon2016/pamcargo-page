<?php

declare(strict_types=1);

namespace App\Functions;

class Utilities
{
    /**
     * @param string $path
     * @param string $action
     * @param bool $reversed
     * @return string
     */
    public static function activateIfRouteIs(string $path, string $action = 'active', bool $reversed = false): string
    {
        return (!$reversed)
            ? (request()->routeIs($path) ? $action : '')
            : (request()->routeIs($path) ? '' : $action);
    }
}
