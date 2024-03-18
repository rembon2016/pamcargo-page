<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General\About;

use App\Actions\About\ObjectiveAction;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\About\UpdateAboutRequest;

class ObjectiveController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $actions = [
            'url' => route('admin.general.about.objective.save'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        $about = About::select('id', 'objective_content')->first();

        return view('adm.general.about.objective', [
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
        $objectiveAction = new ObjectiveAction();

        if (!empty($about)) {
            $message = __('actions.updated', ['prop' => 'Objective']);
            $objectiveAction->updateObjective($request->validated() + ['about_id' => $about->id]);
        } else {
            $message = __('actions.stored', ['prop' => 'Objective']);
            $objectiveAction->createObjective($request->validated());
        }

        return redirect()
            ->back()
            ->with('success', $message);
    }
}
