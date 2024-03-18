<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General\About;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Actions\About\MissionAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\About\UpdateAboutRequest;

class MissionController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $actions = [
            'url' => route('admin.general.about.mission.save'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        $about = About::select('id', 'mission_content')->first();

        return view('adm.general.about.mission', [
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
        $missionAction = new MissionAction();

        if (!empty($about)) {
            $message = __('actions.updated', ['prop' => 'Mission']);
            $missionAction->updateMission($request->validated() + ['about_id' => $about->id]);
        } else {
            $message = __('actions.stored', ['prop' => 'Mission']);
            $missionAction->createMission($request->validated());
        }

        return redirect()
            ->back()
            ->with('success', $message);
    }
}
