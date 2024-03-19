<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General;

use App\Actions\ImprintAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Imprint\UpdateImprintRequest;
use App\Models\Imprint;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ImprintController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $actions = [
            'url' => route('admin.general.imprint.save'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        $imprint = Imprint::first();

        return view('adm.general.imprint.form', [
            'actions' => $actions,
            'imprint' => $imprint,
        ]);
    }

    /**
     * @param UpdateImprintRequest $request
     * @return RedirectResponse
     */
    public function createOrUpdate(UpdateImprintRequest $request): RedirectResponse
    {
        $imprint = Imprint::first();
        $imprintAction = new ImprintAction();

        if (empty($imprint)) {
            $message = __('actions.stored', ['prop' => 'Imprint']);
            $imprintAction->createImprint($request->validated());
        } else {
            $message = __('actions.updated', ['prop' => 'Imprint']);
            $imprintAction->updateImprint($request->validated() + ['imprint_id' => $imprint->id]);
        }

        return redirect()
            ->back()
            ->with('success', $message);
    }
}
