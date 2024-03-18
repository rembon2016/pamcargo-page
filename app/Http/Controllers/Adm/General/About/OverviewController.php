<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General\About;

use App\Actions\About\OverviewAction;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\About\UpdateAboutRequest;

class OverviewController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $actions = [
            'url' => route('admin.general.about.overview.save'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        $about = About::select('id', 'overview_content')->first();

        return view('adm.general.about.overview', [
            'actions' => $actions,
            'about' => $about,
        ]);
    }

    /**
     * @param UpdateAboutRequest $request
     * @return RedirectRequest
     */
    public function createOrUpdate(UpdateAboutRequest $request): RedirectResponse
    {
        $about = About::first();
        $overviewAction = new OverviewAction();

        if (!empty($about)) {
            $message = __('actions.updated', ['prop' => 'Overview']);
            $overviewAction->updateOverview($request->validated() + ['about_id' => $about->id]);
        } else {
            $message = __('actions.stored', ['prop' => 'Overview']);
            $overviewAction->createOverview($request->validated());
        }

        return redirect()
            ->back()
            ->with('success', $message);
    }
}
