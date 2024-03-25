<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Office;
use App\Functions\Utilities;
use DayCod\StupImages\StupImages;

class OfficeAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createOffice(array $dto): array|object
    {
        $office = Office::create([
            'country_id' => $dto['country_id'],
            'continent_id' => $dto['continent_id'],
            'name' => $dto['name'],
            'longitude' => $dto['longitude'],
            'latitude' => $dto['latitude'],
            'first_contact_name' => $dto['first_contact_name'],
            'second_contact_name' => $dto['second_contact_name'],
            'first_telp_num' => $dto['first_telp_num'],
            'second_telp_num' => $dto['second_telp_num'],
            'first_fax' => $dto['first_fax'],
            'second_fax' => $dto['second_fax'],
            'first_mob' => $dto['first_mob'],
            'second_mob' => $dto['second_mob'],
            'first_email' => $dto['first_email'],
            'second_email' => $dto['second_email'],
            'first_website' => $dto['first_website'],
            'second_website' => $dto['second_website'],
            'address' => $dto['address'],
            'image_url' => (new StupImages('office-img', 'office', 1280, 720))
                ->StupImagesToStorage($dto['image_file']),
        ]);

        return Utilities::arrayObjectResponse($office->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateOffice(array $dto): array|object
    {
        $office = Office::find($dto['office_id']);
        $updatedOffice = tap($office)->update([
            'country_id' => $dto['country_id'],
            'continent_id' => $dto['continent_id'],
            'name' => $dto['name'],
            'longitude' => $dto['longitude'],
            'latitude' => $dto['latitude'],
            'first_contact_name' => $dto['first_contact_name'],
            'second_contact_name' => $dto['second_contact_name'],
            'first_telp_num' => $dto['first_telp_num'],
            'second_telp_num' => $dto['second_telp_num'],
            'first_fax' => $dto['first_fax'],
            'second_fax' => $dto['second_fax'],
            'first_mob' => $dto['first_mob'],
            'second_mob' => $dto['second_mob'],
            'first_email' => $dto['first_email'],
            'second_email' => $dto['second_email'],
            'first_website' => $dto['first_website'],
            'second_website' => $dto['second_website'],
            'address' => $dto['address'],
            'image_url' => (is_null($dto['image_file']))
                ? $office->image_url
                : (new StupImages('office-img', 'office', 1280, 720))
                    ->StupImagesToStorage($dto['image_file'], $office->image_url),
        ]);

        return Utilities::arrayObjectResponse($updatedOffice->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteOffice(array $dto): array|object
    {
        $office = Office::find($dto['office_id']);
        $deletedOffice = tap($office)->delete();

        return Utilities::arrayObjectResponse($deletedOffice->toArray());
    }
}
