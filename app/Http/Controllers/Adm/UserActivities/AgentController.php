<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\UserActivities;

use App\Models\Agent;
use App\Actions\AgentAction;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Agent\AddAgentRequest;
use App\Http\Requests\Agent\UpdateAgentRequest;

class AgentController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $agents = Agent::latest()->get();

        return view('adm.user-activities.agents.index', [
            'agents' => $agents,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => route('admin.ua.agent.store'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        return view('adm.user-activities.agents.form', [
            'actions' => $actions,
        ]);
    }

    /**
     * @param AddAgentRequest $request
     * @return RedirectResponse
     */
    public function store(AddAgentRequest $request): RedirectResponse
    {
        $agentAction = new AgentAction();
        $agentAction->createAgent($request->validated());

        return redirect()
            ->route('admin.ua.agent.index')
            ->with('success', __('actions.stored', ['prop' => 'Agent']));
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => route('admin.ua.agent.update', $id),
            'method' => 'PUT',
            'act' => 'Update',
        ];

        $agent = Agent::find($id);

        return view('adm.user-activities.agents.form', [
            'actions' => $actions,
            'agent' => $agent,
        ]);
    }

    /**
     * @param UpdateAgentRequest $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(UpdateAgentRequest $request, string $id): RedirectResponse
    {
        $agentAction = new AgentAction();
        $agentAction->updateAgent($request->validated() + [
            'agent_id' => $id,
        ]);

        return redirect()
            ->route('admin.ua.agent.index')
            ->with('success', __('actions.updated', ['prop' => 'Agent']));
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $agentAction = new AgentAction();
        $agentAction->deleteAgent(['agent_id' => $id]);

        return redirect()
            ->route('admin.ua.agent.index')
            ->with('success', __('actions.deleted', ['prop' => 'Agent']));
    }
}
