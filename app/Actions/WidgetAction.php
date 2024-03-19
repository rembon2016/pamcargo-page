<?php

declare(strict_types=1);

namespace App\Actions;

use App\Functions\Utilities;
use App\Models\Widget;

class WidgetAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createWidget(array $dto): array|object
    {
        $widget = Widget::create([
            'title' => $dto['title'],
            'url' => $dto['url'],
            'description' => $dto['description'],
            'is_active' => true,
        ]);

        return Utilities::arrayObjectResponse($widget->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateWidget(array $dto): array|object
    {
        $widget = Widget::find($dto['widget_id']);
        $updatedWidget = tap($widget)->update([
            'title' => $dto['title'],
            'url' => $dto['url'],
            'description' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($updatedWidget->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function setWidgetStatus(array $dto): array|object
    {
        $widget = Widget::find($dto['widget_id']);
        $changingWidgetStatus = tap($widget)->update([
            'is_active' => $dto['s'] == 'active' ? true : false,
        ]);

        return Utilities::arrayObjectResponse($changingWidgetStatus->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteWidget(array $dto): array|object
    {
        $widget = Widget::find($dto['widget_id']);
        $deletedWidget = tap($widget)->delete();

        return Utilities::arrayObjectResponse($deletedWidget->toArray());
    }
}
