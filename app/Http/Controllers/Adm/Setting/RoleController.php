<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\Setting;

use App\Actions\RoleAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Role\AddRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $roles = Role::where('name', '!=', 'admin')->latest()->get();

        return view('adm.settings.role.index', [
            'roles' => $roles,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => route('admin.setting.role.store'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        return view('adm.settings.role.form', [
            'actions' => $actions,
        ]);
    }

    /**
     * @param AddRoleRequest $request
     * @return RedirectResponse
     */
    public function store(AddRoleRequest $request): RedirectResponse
    {
        $roleAction = new RoleAction();
        $roleAction->createRole($request->validated());

        return redirect()
            ->route('admin.setting.role.index')
            ->with('success', __('actions.stored', ['prop' => 'Role']));
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => route('admin.setting.role.update', $id),
            'method' => 'PUT',
            'act' => 'Update',
        ];

        $role = Role::find($id);

        return view('adm.settings.role.form', [
            'actions' => $actions,
            'role' => $role,
        ]);
    }

    /**
     * @param UpdateRoleRequest $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(UpdateRoleRequest $request, $id): RedirectResponse
    {
        $roleAction = new RoleAction();
        $roleAction->updateRole($request->validated() + [
            'role_id' => $id,
        ]);

        return redirect()
            ->route('admin.setting.role.index')
            ->with('success', __('actions.updated', ['prop' => 'Role']));
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $roleAction = new RoleAction();
        $roleAction->deleteRole(['role_id' => $id]);

        return redirect()
            ->route('admin.setting.role.index')
            ->with('success', __('actions.deleted', ['prop' => 'Role']));
    }
}
