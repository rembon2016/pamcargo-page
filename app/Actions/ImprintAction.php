<?php

declare(strict_types=1);

namespace App\Actions;

use App\Functions\Utilities;
use App\Models\Imprint;

class ImprintAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createImprint(array $dto): array|object
    {
        $imprint = Imprint::create([
            'title' => $dto['title'],
            'description' => $dto['description'],
            'is_active' => $dto['status'],
        ]);

        return Utilities::arrayObjectResponse($imprint->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateImprint(array $dto): array|object
    {
        $imprint = Imprint::find($dto['imprint_id']);
        $updatedImprint = tap($imprint)->update([
            'title' => $dto['title'],
            'description' => $dto['description'],
            'is_active' => $dto['status']
        ]);

        return Utilities::arrayObjectResponse($updatedImprint->toArray());
    }
}
