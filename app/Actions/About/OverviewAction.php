<?php

declare(strict_types=1);

namespace App\Actions\About;

use App\Functions\Utilities;
use App\Models\About;

class OverviewAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createOverview(array $dto): array|object
    {
        $createOverview = About::create([
            'overview_content' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($createOverview->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateOverview(array $dto): array|object
    {
        $about = About::find($dto['about_id']);
        $updatedOverview = tap($about)->update(['overview_content' => $dto['description']]);

        return Utilities::arrayObjectResponse($updatedOverview->toArray());
    }
}
