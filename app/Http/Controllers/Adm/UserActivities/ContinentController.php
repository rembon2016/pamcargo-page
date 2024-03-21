<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\UserActivities;

use App\Actions\ContinentAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Continent\AddContinentRequest;
use App\Http\Requests\Continent\UpdateContinentRequest;
use App\Models\Continent;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContinentController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $continents = Continent::latest()->get();

        return view('adm.user-activities.continent.index', [
            'continents' => $continents,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => route('admin.ua.continent.store'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        return view('adm.user-activities.continent.form', [
            'actions' => $actions,
        ]);
    }

    /**
     * @param AddContinentRequest $request
     * @return RedirectResponse
     */
    public function store(AddContinentRequest $request): RedirectResponse
    {
        $continentAction = new ContinentAction();
        $continentAction->createContinent($request->validated());

        return redirect()
            ->route('admin.ua.continent.index')
            ->with('success', __('actions.stored', ['prop' => 'Continent']));
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => route('admin.ua.continent.update', $id),
            'method' => 'PUT',
            'act' => 'Update',
        ];

        $continent = Continent::find($id);

        return view('adm.user-activities.continent.form', [
            'actions' => $actions,
            'continent' => $continent,
        ]);
    }

    /**
     * @param UpdateContinentRequest $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(UpdateContinentRequest $request, string $id): RedirectResponse
    {
        $continentAction = new ContinentAction();
        $continentAction->updateContinent($request->validated() + ['continent_id' => $id]);

        return redirect()
            ->route('admin.ua.continent.index')
            ->with('success', __('actions.updated', ['prop' => 'Continent']));
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $continentAction = new ContinentAction();
        $continentAction->deleteContinent(['continent_id' => $id]);

        return redirect()
            ->route('admin.ua.continent.index')
            ->with('success', __('actions.deleted', ['prop' => 'Continent']));
    }
}
