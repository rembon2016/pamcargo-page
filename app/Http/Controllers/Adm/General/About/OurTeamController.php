<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General\About;

use App\Actions\About\OurTeamAction;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\About\UpdateAboutRequest;

class OurTeamController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $actions = [
            'url' => '',
            'method' => 'POST',
            'act' => 'Submit',
        ];

        $about = About::select('id', 'ourteam_content')->first();

        return view('adm.general.about.ourteam', [
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
        $ourteamAction = new OurTeamAction();

        if (!empty($about)) {
            $message = __('actions.updated', ['prop' => 'Ourteam']);
            $ourteamAction->updateOurteam($request->validated() + ['about_id' => $about->id]);
        } else {
            $message = __('actions.stored', ['prop' => 'Ourteam']);
            $ourteamAction->createOurteam($request->validated());
        }

        return redirect()
            ->back()
            ->with('success', $message);
    }
}
