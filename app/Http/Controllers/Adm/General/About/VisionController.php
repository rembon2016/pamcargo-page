<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General\About;

use App\Actions\About\VisionAction;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\About\UpdateAboutRequest;

class VisionController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $actions = [
            'url' => route('admin.general.about.vision.save'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        $about = About::select('id', 'vision_content')->first();

        return view('adm.general.about.vision', [
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
        $visionAction = new VisionAction();

        if (!empty($about)) {
            $message = __('actions.updated', ['prop' => 'Vision']);
            $visionAction->updateVision($request->validated() + ['about_id' => $about->id]);
        } else {
            $message = __('actions.stored', ['prop' => 'Vision']);
            $visionAction->createVision($request->validated());
        }

        return redirect()
            ->back()
            ->with('success', $message);
    }
}
