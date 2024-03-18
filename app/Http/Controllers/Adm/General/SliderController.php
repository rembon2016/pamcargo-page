<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General;

use App\Actions\SliderAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\AddSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Models\Slider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $sliders = Slider::latest()->get();

        return view('adm.general.slider.index', [
            'sliders' => $sliders,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => route('admin.general.slider.store'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        return view('adm.general.slider.form', [
            'actions' => $actions,
        ]);
    }

    /**
     * @param AddSliderRequest $request
     * @return RedirectResponse
     */
    public function store(AddSliderRequest $request): RedirectResponse
    {
        $sliderAction = new SliderAction();
        $sliderAction->createSlider($request->validated());

        return redirect()
            ->route('admin.general.slider.index')
            ->with('success', __('actions.stored', ['prop' => 'Slider']));
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => route('admin.general.slider.update', $id),
            'method' => 'PUT',
            'act' => 'Update',
        ];

        $slider = Slider::find($id);

        return view('adm.general.slider.form', [
            'actions' => $actions,
            'slider' => $slider,
        ]);
    }

    /**
     * @param UpdateSliderRequest $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(UpdateSliderRequest $request, string $id): RedirectResponse
    {
        $sliderAction = new SliderAction();
        $sliderAction->updateSlider([
            'title' => $request->title,
            'description' => $request->description,
            'image_file' => $request->file('image_file'),
            'slider_id' => $id
        ]);

        return redirect()
            ->route('admin.general.slider.index')
            ->with('success', __('actions.updated', ['prop' => 'Slider']));
    }

    /**
     * @param Request $request
     * @param string $id
     * @return RedirectResponse
     */
    public function setUsageStatus(Request $request, string $id): RedirectResponse
    {
        $sliderAction = new SliderAction();
        $sliderAction->setSliderStatus($request->except('_token') + ['slider_id' => $id]);

        return redirect()
            ->route('admin.general.slider.index')
            ->with('success', 'Slider Status was Changed!');
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $sliderAction = new SliderAction();
        $sliderAction->deleteSlider(['slider_id' => $id]);

        return redirect()
            ->route('admin.general.slider.index')
            ->with('success', __('actions.deleted', ['prop' => 'Slider']));
    }
}
