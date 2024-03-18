<?php

declare(strict_types=1);

namespace App\Actions\About;

use App\Models\About;
use App\Functions\Utilities;

class ObjectiveAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createObjective(array $dto): array|object
    {
        $createObjective = About::create([
            'objective_content' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($createObjective->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateObjective(array $dto): array|object
    {
        $about = About::find($dto['about_id']);
        $updatedObjective = tap($about)->update(['objective_content' => $dto['description']]);

        return Utilities::arrayObjectResponse($updatedObjective->toArray());
    }
}
