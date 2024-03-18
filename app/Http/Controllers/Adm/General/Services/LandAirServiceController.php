<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General\Services;

use App\Actions\Services\LandAirAction;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Service\UpdateServiceRequest;

class LandAirServiceController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $actions = [
            'url' => route('admin.general.service.land.save'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        $service = Service::where('type', Service::LAND_AIR_TYPE)->first();

        return view('adm.general.services.land', [
            'actions' => $actions,
            'service' => $service,
        ]);
    }

    /**
     * @param UpdateServiceRequest $request
     * @return RedirectResponse
     */
    public function createOrUpdate(UpdateServiceRequest $request): RedirectResponse
    {
        $service = Service::where('type', Service::LAND_AIR_TYPE)->first();
        $landAirAction = new LandAirAction();

        if (!empty($service)) {
            $message = __('actions.updated', ['prop' => 'Sea Air Service']);
            $landAirAction->updateLandAir($request->validated() + ['service_id' => $service->id]);
        } else {
            $message = __('actions.stored', ['prop' => 'Sea Air Service']);
            $landAirAction->createLandAir($request->validated());
        }

        return redirect()
            ->back()
            ->with('success', $message);
    }
}
