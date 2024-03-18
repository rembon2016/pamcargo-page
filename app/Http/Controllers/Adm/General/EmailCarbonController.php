<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General;

use App\Actions\EmailCarbonAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailCarbon\AddEmailCarbonRequest;
use App\Http\Requests\EmailCarbon\UpdateEmailCarbonRequest;
use App\Models\EmailCarbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailCarbonController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $emailCarbons = EmailCarbon::latest()->get();

        return view('adm.general.emailcarbon.index', [
            'emailCarbons' => $emailCarbons,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => route('admin.general.email_carbon.store'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        return view('adm.general.emailcarbon.form', [
            'actions' => $actions,
        ]);
    }

    /**
     * @param AddEmailCarbonRequest $request
     * @return RedirectResponse
     */
    public function store(AddEmailCarbonRequest $request): RedirectResponse
    {
        $emailCarbonAction = new EmailCarbonAction();
        $emailCarbonAction->createEmailCarbon($request->validated());

        return redirect()
            ->route('admin.general.email_carbon.index')
            ->with('success', __('actions.stored', ['prop' => 'Email Carbon']));
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => route('admin.general.email_carbon.update', $id),
            'method' => 'PUT',
            'act' => 'Update',
        ];

        $emailCarbon = EmailCarbon::find($id);

        return view('adm.general.emailcarbon.form', [
            'actions' => $actions,
            'emailCarbon' => $emailCarbon,
        ]);
    }

    /**
     * @param UpdateEmailCarbonRequest $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(UpdateEmailCarbonRequest $request, string $id): RedirectResponse
    {
        $emailCarbonAction = new EmailCarbonAction();
        $emailCarbonAction->updateEmailCarbon($request->validated() + [
            'email_carbon_id' => $id,
        ]);

        return redirect()
            ->route('admin.general.email_carbon.index')
            ->with('success', __('actions.updated', ['prop' => 'Email Carbon']));
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $emailCarbonAction = new EmailCarbonAction();
        $emailCarbonAction->deleteEmailCarbon(['email_carbon_id' => $id]);

        return redirect()
            ->back()
            ->with('success', __('actions.deleted', ['prop' => 'Email Carbon']));
    }
}
