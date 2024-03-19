<?php

declare(strict_types=1);

namespace App\Actions\Contact;

use App\Functions\Utilities;
use App\Models\ContentContact;
use DayCod\StupImages\StupImages;

class ContentContactAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createContentContact(array $dto): array|object
    {
        $contentContact = ContentContact::create([
            'mark' => $dto['mark'],
            'title' => $dto['title'],
            'icon' => is_null($dto['icon'])
                ? null
                : (new StupImages('content-contact', 'contact/content', 1280, 720))
                    ->StupImagesToStorage($dto['icon']),
            'description' => $dto['description'],
            'is_active' => true,
        ]);

        return Utilities::arrayObjectResponse($contentContact->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateContentContact(array $dto): array|object
    {
        $contentContact = ContentContact::find($dto['content_contact_id']);
        $updatedContentContact = tap($contentContact)->update([
            'mark' => $dto['mark'],
            'title' => $dto['title'],
            'icon' => (is_null($dto['icon']))
                ? $contentContact->icon
                : (new StupImages('content-contact', 'contact/content', 1280, 720))
                    ->StupImagesToStorage($dto['icon'], $contentContact->icon),
            'description' => $dto['description'],
        ]);

        return Utilities::arrayObjectResponse($updatedContentContact->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteContentContact(array $dto): array|object
    {
        $contentContact = ContentContact::find($dto['content_contact_id']);
        $deletedContentContact = tap($contentContact)->delete();

        return Utilities::arrayObjectResponse($deletedContentContact->toArray());
    }
}
