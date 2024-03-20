<?php

declare(strict_types=1);

namespace App\Actions;

use App\Functions\Utilities;
use App\Models\News;
use DayCod\StupImages\StupImages;

class NewsAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createNews(array $dto): array|object
    {
        $imageUrls = array();

        foreach ($dto['image_files'] as $index => $imageFile) {
            $imageUrls[] = (new StupImages("news-image-{$index}", 'news', 1280, 720))
                ->StupImagesToStorage($imageFile);
        }

        $news = News::create([
            'title' => $dto['title'],
            'caption' => $dto['caption'],
            'image_urls' => $imageUrls,
            'description' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($news->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateNews(array $dto): array|object
    {
        $news = News::find($dto['news_id']);

        if (!empty($dto['image_files'])) {
            $imageUrls = array();

            foreach($dto['image_files'] as $index => $imageFile) {
                $imageUrls[] = (new StupImages("news-image-{$index}", 'news', 1280, 720))
                    ->StupImagesToStorage($imageFile, $news->image_urls->each(fn($n) => $n));
            }
        } else {
            $imageUrls = $news->image_urls;
        }

        $updatedNews = tap($news)->update([
            'title' => $dto['title'],
            'caption' => $dto['caption'],
            'image_urls' => $imageUrls,
            'description' => $dto['description']
        ]);

        return Utilities::arrayObjectResponse($updatedNews->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteNews(array $dto): array|object
    {
        $news = News::find($dto['news_id']);
        $deletedNews = tap($news)->delete();

        return Utilities::arrayObjectResponse($deletedNews->toArray());
    }
}
