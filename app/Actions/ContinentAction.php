<?php

declare(strict_types=1);

namespace App\Actions;

use App\Functions\Utilities;
use App\Models\Continent;

class ContinentAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createContinent(array $dto): array|object
    {
        $continent = Continent::create([
            'region' => $dto['region'],
            'description' => $dto['description'],
        ]);

        return Utilities::arrayObjectResponse($continent->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateContinent(array $dto): array|object
    {
        $continent = Continent::find($dto['continent_id']);
        $updatedContinent = tap($continent)->update([
            'region' => $dto['region'],
            'description' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($updatedContinent->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteContinent(array $dto): array|object
    {
        $continent = Continent::find($dto['continent_id']);
        $deletedContinent = tap($continent)->delete();

        return Utilities::arrayObjectResponse($deletedContinent->toArray());
    }
}
