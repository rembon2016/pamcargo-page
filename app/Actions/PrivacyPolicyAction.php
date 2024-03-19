<?php

declare(strict_types=1);

namespace App\Actions;

use App\Functions\Utilities;
use App\Models\PrivacyPolicy;

class PrivacyPolicyAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createPrivacyPolicy(array $dto): array|object
    {
        $privacyPolicy = PrivacyPolicy::create([
            'title' => $dto['title'],
            'description' => $dto['description'],
            'is_active' => $dto['status'],
        ]);

        return Utilities::arrayObjectResponse($privacyPolicy->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updatePrivacyPolicy(array $dto): array|object
    {
        $privacyPolicy = PrivacyPolicy::find($dto['privacy_policy_id']);
        $updatedPrivacyPolicy = tap($privacyPolicy)->update([
            'title' => $dto['title'],
            'description' => $dto['description'],
            'is_active' => $dto['status'],
        ]);

        return Utilities::arrayObjectResponse($updatedPrivacyPolicy->toArray());
    }
}
