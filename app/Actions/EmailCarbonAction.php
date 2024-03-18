<?php

declare(strict_types=1);

namespace App\Actions;

use App\Functions\Utilities;
use App\Models\EmailCarbon;

class EmailCarbonAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createEmailCarbon(array $dto): array|object
    {
        $emailCarbon = EmailCarbon::create([
            'email' => $dto['email']
        ]);

        return Utilities::arrayObjectResponse($emailCarbon->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateEmailCarbon(array $dto): array|object
    {
        $emailCarbon = EmailCarbon::find($dto['email_carbon_id']);
        $updatedEmailCarbon = tap($emailCarbon)->update(['email' => $dto['email']]);

        return Utilities::arrayObjectResponse($updatedEmailCarbon->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteEmailCarbon(array $dto): array|object
    {
        $emailCarbon = EmailCarbon::find($dto['email_carbon_id']);
        $deletedEmailCarbon = tap($emailCarbon)->delete();

        return Utilities::arrayObjectResponse($deletedEmailCarbon->toArray());
    }
}
