<?php

declare(strict_types=1);

namespace App\Actions\Services;

use App\Functions\Utilities;
use App\Models\Service;

class SeaAirAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createSeaAir(array $dto): array|object
    {
        $service = Service::create([
            'title' => $dto['title'],
            'description' => $dto['description'],
            'is_active' => true,
            'type' => Service::SEA_AIR_TYPE,
        ]);

        return Utilities::arrayObjectResponse($service->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateSeaAir(array $dto): array|object
    {
        $service = Service::find($dto['service_id']);
        $updatedService = tap($service)->update([
            'title' => $dto['title'],
            'description' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($updatedService->toArray());
    }
}
