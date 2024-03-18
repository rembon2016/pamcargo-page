<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General\Services;

use App\Actions\Services\SeaAirAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Service\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SeaAirServiceController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $actions = [
            'url' => route('admin.general.service.sea.save'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        $service = Service::where('type', Service::SEA_AIR_TYPE)->first();

        return view('adm.general.services.sea', [
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
        $service = Service::where('type', Service::SEA_AIR_TYPE)->first();
        $seaAirAction = new SeaAirAction();

        if (!empty($service)) {
            $message = __('actions.updated', ['prop' => 'Sea Air Service']);
            $seaAirAction->updateSeaAir($request->validated() + ['service_id' => $service->id]);
        } else {
            $message = __('actions.stored', ['prop' => 'Sea Air Service']);
            $seaAirAction->createSeaAir($request->validated());
        }

        return redirect()
            ->back()
            ->with('success', $message);
    }
}
