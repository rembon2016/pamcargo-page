<?php

declare(strict_types=1);

namespace App\Actions\Contact;

use App\Functions\Utilities;
use App\Models\FooterContact;
use DayCod\StupImages\StupImages;

class FooterContactAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createFooterContact(array $dto): array|object
    {
        $footerContact = FooterContact::create([
            'name' => $dto['name'],
            'icon' => is_null($dto['icon'])
                ? null
                : (new StupImages('footer-contact', 'contact/footer', 1280, 720))
                    ->StupImagesToStorage($dto['icon']),
            'description' => $dto['description'],
            'is_active' => true,
        ]);

        return Utilities::arrayObjectResponse($footerContact->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateFooterContact(array $dto): array|object
    {
        $footerContact = FooterContact::find($dto['footer_contact_id']);
        $updatedFooterContact = tap($footerContact)->update([
            'name' => $dto['name'],
            'icon' => (is_null($dto['icon']))
                ? $footerContact->icon
                : (new StupImages('footer-contact', 'contact/footer', 1280, 720))
                    ->StupImagesToStorage($dto['icon'], $footerContact->icon),
            'description' => $dto['description'],
        ]);

        return Utilities::arrayObjectResponse($updatedFooterContact->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteFooterContact(array $dto): array|object
    {
        $footerContact = FooterContact::find($dto['footer_contact_id']);
        $deletedFooterContact = tap($footerContact)->delete();

        return Utilities::arrayObjectResponse($deletedFooterContact->toArray());
    }
}
