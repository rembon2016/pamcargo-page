<?php

declare(strict_types=1);

namespace App\Actions\Services;

use App\Models\Service;
use App\Functions\Utilities;

class LandAirAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createLandAir(array $dto): array|object
    {
        $service = Service::create([
            'title' => $dto['title'],
            'description' => $dto['description'],
            'is_active' => true,
            'type' => Service::LAND_AIR_TYPE,
        ]);

        return Utilities::arrayObjectResponse($service->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateLandAir(array $dto): array|object
    {
        $service = Service::find($dto['service_id']);
        $updatedService = tap($service)->update([
            'title' => $dto['title'],
            'description' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($updatedService->toArray());
    }
}
