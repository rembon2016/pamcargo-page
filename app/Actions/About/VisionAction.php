<?php

declare(strict_types=1);

namespace App\Actions\About;

use App\Models\About;
use App\Functions\Utilities;

class VisionAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createVision(array $dto): array|object
    {
        $createVision = About::create([
            'vision_content' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($createVision->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateVision(array $dto): array|object
    {
        $about = About::find($dto['about_id']);
        $updatedVision = tap($about)->update(['vision_content' => $dto['description']]);

        return Utilities::arrayObjectResponse($updatedVision->toArray());
    }
}
