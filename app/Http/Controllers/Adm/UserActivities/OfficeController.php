<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\UserActivities;

use App\Actions\OfficeAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Office\AddOfficeRequest;
use App\Http\Requests\Office\UpdateOfficeRequest;
use App\Models\Continent;
use App\Models\Country;
use App\Models\Office;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $offices = Office::with('country', 'continent')->latest()->get();

        return view('adm.user-activities.office.index', [
            'offices' => $offices,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => route('admin.ua.office.store'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        $countries = Country::orderBy('name', 'asc')->get();
        $continents = Continent::latest()->get();

        return view('adm.user-activities.office.form', [
            'actions' => $actions,
            'countries' => $countries,
            'continents' => $continents,
        ]);
    }

    /**
     * @param AddOfficeRequest $request
     * @return RedirectResponse
     */
    public function store(AddOfficeRequest $request): RedirectResponse
    {
        $officeAction = new OfficeAction();
        $officeAction->createOffice($request->validated());

        return redirect()
            ->route('admin.ua.office.index')
            ->with('success', __('actions.stored', ['prop' => 'Office']));
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => route('admin.ua.office.update', $id),
            'method' => 'PUT',
            'act' => 'Update',
        ];

        $office = Office::find($id);
        $countries = Country::orderBy('name', 'asc')->get();
        $continents = Continent::latest()->get();

        return view('adm.user-activities.office.form', [
            'actions' => $actions,
            'office' => $office,
            'countries' => $countries,
            'continents' => $continents,
        ]);
    }

    /**
     * @param UpdateOfficeRequest $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(UpdateOfficeRequest $request, string $id): RedirectResponse
    {
        $officeAction = new OfficeAction();
        $officeAction->updateOffice($request->except('image_file') + [
            'office_id' => $id,
            'image_file' => $request->image_file,
        ]);

        return redirect()
            ->route('admin.ua.office.index')
            ->with('success', __('actions.updated', ['prop' => 'Office']));
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $officeAction = new OfficeAction();
        $officeAction->deleteOffice(['office_id' => $id]);

        return redirect()
            ->route('admin.ua.office.index')
            ->with('success', __('actions.deleted', ['prop' => 'Office']));
    }
}
