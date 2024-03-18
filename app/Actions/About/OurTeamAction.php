<?php

declare(strict_types=1);

namespace App\Actions\About;

use App\Models\About;
use App\Functions\Utilities;

class OurTeamAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createOurteam(array $dto): array|object
    {
        $createOurteam = About::create([
            'ourteam_content' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($createOurteam->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateOurteam(array $dto): array|object
    {
        $about = About::find($dto['about_id']);
        $updatedOurteam = tap($about)->update(['ourteam_content' => $dto['description']]);

        return Utilities::arrayObjectResponse($updatedOurteam->toArray());
    }
}
