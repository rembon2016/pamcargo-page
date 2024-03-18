<?php

declare(strict_types=1);

namespace App\Actions\About;

use App\Models\About;
use App\Functions\Utilities;

class MissionAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createMission(array $dto): array|object
    {
        $createMission = About::create([
            'mission_content' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($createMission->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateMission(array $dto): array|object
    {
        $about = About::find($dto['about_id']);
        $updatedMission = tap($about)->update(['mission_content' => $dto['description']]);

        return Utilities::arrayObjectResponse($updatedMission->toArray());
    }
}
