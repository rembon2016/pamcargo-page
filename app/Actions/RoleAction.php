<?php

declare(strict_types=1);

namespace App\Actions;

use App\Functions\Utilities;
use App\Models\Role;

class RoleAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createRole(array $dto): array|object
    {
        $role = Role::create([
            'name' => $dto['name']
        ]);

        return Utilities::arrayObjectResponse($role->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateRole(array $dto): array|object
    {
        $role = Role::find($dto['role_id']);
        $updatedRole = tap($role)->update([
            'name' => $dto['name']
        ]);

        return Utilities::arrayObjectResponse($updatedRole->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteRole(array $dto): array|object
    {
        $role = Role::find($dto['role_id']);
        $deletedRole = tap($role)->delete();

        return Utilities::arrayObjectResponse($deletedRole->toArray());
    }
}
