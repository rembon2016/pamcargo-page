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

    /**
     * @param array $data
     * @param int $code
     * @return array|object
     */
    public static function arrayObjectResponse(array $data, int $code = 200): array|object
    {
        return (object) [
            'code' => $code,
            'data' => $data,
        ];
    }

    /**
     * @param string $content
     * @param string $replace
     * @return string
     */
    public static function decodeHtmlEntity(string $content = null, string $replace = '-'): string
    {
        return is_null($content)
            ? $replace
            : html_entity_decode($content);
    }
}
