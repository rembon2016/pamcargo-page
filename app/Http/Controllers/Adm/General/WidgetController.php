<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General;

use App\Models\Widget;
use Illuminate\Http\Request;
use App\Actions\WidgetAction;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Widget\AddWidgetRequest;
use App\Http\Requests\Widget\UpdateWidgetRequest;

class WidgetController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $widgets = Widget::latest()->get();

        return view('adm.general.widget.index', [
            'widgets' => $widgets,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => route('admin.general.widget.store'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        return view('adm.general.widget.form', [
            'actions' => $actions,
        ]);
    }

    /**
     * @param AddWidgetRequest $request
     * @return RedirectResponse
     */
    public function store(AddWidgetRequest $request): RedirectResponse
    {
        $widgetAction = new WidgetAction();
        $widgetAction->createWidget($request->validated());

        return redirect()
            ->route('admin.general.widget.index')
            ->with('success', __('actions.stored', ['prop' => 'Widget']));
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => route('admin.general.widget.update', $id),
            'method' => 'PUT',
            'act' => 'Update',
        ];

        $widget = Widget::find($id);

        return view('adm.general.widget.form', [
            'actions' => $actions,
            'widget' => $widget,
        ]);
    }

    /**
     * @param UpdateWidgetRequest $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(UpdateWidgetRequest $request, string $id): RedirectResponse
    {
        $widgetAction = new WidgetAction();
        $widgetAction->updateWidget($request->validated() + ['widget_id' => $id]);

        return redirect()
            ->route('admin.general.widget.index')
            ->with('success', __('actions.updated', ['prop' => 'Widget']));
    }

    /**
     * @param Request $request
     * @param string $id
     * @return RedirectResponse
     */
    public function setUsageStatus(Request $request, string $id): RedirectResponse
    {
        $widgetAction = new WidgetAction();
        $widgetAction->setWidgetStatus($request->except('_token') + ['widget_id' => $id]);

        return redirect()
            ->route('admin.general.widget.index')
            ->with('success', 'Status was Changed!');
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $widgetAction = new WidgetAction();
        $widgetAction->deleteWidget(['widget_id' => $id]);

        return redirect()
            ->route('admin.general.widget.index')
            ->with('success', __('actions.deleted', ['prop' => 'Widget']));
    }
}
