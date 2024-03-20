<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\UserActivities;

use App\Actions\NewsAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\News\AddNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $news = News::latest()->get();

        return view('adm.user-activities.news.index', [
            'news' => $news,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => route('admin.ua.news.store'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        return view('adm.user-activities.news.form', [
            'actions' => $actions,
        ]);
    }

    /**
     * @param AddNewsRequest $request
     * @return RedirectResponse
     */
    public function store(AddNewsRequest $request): RedirectResponse
    {
        $newsAction = new NewsAction();
        $newsAction->createNews($request->validated());

        return redirect()
            ->route('admin.ua.news.index')
            ->with('success', __('actions.stored', ['prop' => 'News']));
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => route('admin.ua.news.update', $id),
            'method' => 'PUT',
            'act' => 'Update',
        ];

        $news = News::find($id);

        return view('adm.user-activities.news.form', [
            'actions' => $actions,
            'news' => $news,
        ]);
    }

    /**
     * @param UpdateNewsRequest $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(UpdateNewsRequest $request, string $id): RedirectResponse
    {
        $newsAction = new NewsAction();
        $newsAction->updateNews([
            'title' => $request->title,
            'caption' => $request->caption,
            'image_files' => $request->image_files,
            'description' => $request->description,
            'news_id' => $id,
        ]);

        return redirect()
            ->route('admin.ua.news.index')
            ->with('success', __('actions.updated', ['prop' => 'News']));
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $newsAction = new NewsAction();
        $newsAction->deleteNews(['news_id' => $id]);

        return redirect()
            ->route('admin.ua.news.index')
            ->with('success', __('actions.deleted', ['prop' => 'News']));
    }
}
