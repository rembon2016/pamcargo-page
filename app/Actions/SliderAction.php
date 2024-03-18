<?php

declare(strict_types=1);

namespace App\Actions;

use App\Functions\Utilities;
use App\Models\Slider;
use DayCod\StupImages\StupImages;

class SliderAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createSlider(array $dto): array|object
    {
        $slider = Slider::create([
            'title' => $dto['title'],
            'description' => $dto['description'],
            'image_url' => (new StupImages('home-slider', 'slider', 1280, 720))
                ->StupImagesToStorage($dto['image_file']),
            'is_active' => true,
        ]);

        return Utilities::arrayObjectResponse($slider->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateSlider(array $dto): array|object
    {
        $slider = Slider::find($dto['slider_id']);
        $updatedSlider = tap($slider)->update([
            'title' => $dto['title'],
            'description' => $dto['description'],
            'image_url' => (is_null($dto['image_file']))
                ? $slider->image_url
                : (new StupImages('home-slider', 'slider', 1280, 720))
                    ->StupImagesToStorage($dto['image_file'], $slider->image_url),
        ]);

        return Utilities::arrayObjectResponse($updatedSlider->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function setSliderStatus(array $dto): array|object
    {
        $slider = Slider::find($dto['slider_id']);
        $changingSliderStatus = tap($slider)->update([
            'is_active' => $dto['s'] == 'active' ? true : false,
        ]);

        return Utilities::arrayObjectResponse($changingSliderStatus->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteSlider(array $dto): array|object
    {
        $slider = Slider::find($dto['slider_id']);
        $deleteSlider = tap($slider)->delete();

        return Utilities::arrayObjectResponse($deleteSlider->toArray());
    }
}
