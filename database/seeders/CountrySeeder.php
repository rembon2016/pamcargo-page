<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Functions\Curl;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $countries = Curl::get('https://raw.githubusercontent.com/dayCod/count-trees/content/src/Content/countries_json.json');

        foreach ($countries as $country) {
            Country::create([
                'code' => $country['country_code'],
                'name' => $country['country_name'],
                'phone_code' => $country['country_phone_code'],
                'currency' => $country['country_currency'],
                'icon' => $country['country_icon_link']
            ]);
        }
    }
}
