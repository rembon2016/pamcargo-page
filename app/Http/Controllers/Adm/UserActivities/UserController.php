<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\UserActivities;

use App\Actions\UserAction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\AddUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $users = User::with('role')
            ->whereHas('role', fn ($q) => $q->where('name', '!=', 'admin'))
            ->latest()
            ->get();

        return view('adm.user-activities.user.index', [
            'users' => $users,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => route('admin.ua.user.store'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        $roles = Role::where('name', '!=', 'admin')->latest()->get();

        return view('adm.user-activities.user.form', [
            'actions' => $actions,
            'roles' => $roles,
        ]);
    }

    /**
     * @param AddUserRequest $request
     * @return RedirectResponse
     */
    public function store(AddUserRequest $request): RedirectResponse
    {
        $userAction = new UserAction();
        $userAction->createUser($request->validated());

        return redirect()
            ->route('admin.ua.user.index')
            ->with('success', __('actions.stored', ['prop' => 'User']));
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => route('admin.ua.user.update', $id),
            'method' => 'PUT',
            'act' => 'Update',
        ];

        $user = User::find($id);
        $roles = Role::where('name', '!=', 'admin')->latest()->get();

        return view('adm.user-activities.user.form', [
            'actions' => $actions,
            'user' => $user,
            'roles' => $roles,
        ]);
    }

    /**
     * @param UpdateUserRequest $request
     * @param string $Id
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, string $id): RedirectResponse
    {
        $userAction = new UserAction();
        $userAction->updateUser([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'role_id' => $request->role_id,
            'user_id' => $id
        ]);

        return redirect()
            ->route('admin.ua.user.index')
            ->with('success', __('actions.updated', ['prop' => 'User']));
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $userAction = new UserAction();
        $userAction->deleteUser(['user_id' => $id]);

        return redirect()
            ->route('admin.ua.user.index')
            ->with('success', __('actions.deleted', ['prop' => 'User']));
    }
}
