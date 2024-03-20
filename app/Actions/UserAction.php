<?php

declare(strict_types=1);

namespace App\Actions;

use App\Functions\Utilities;
use App\Models\User;

class UserAction
{
    /**
     * @param array $dto
     * @return array|object
     */
    public function createUser(array $dto): array|object
    {
        $user = User::create([
            'name' => $dto['name'],
            'email' => $dto['email'],
            'password' => $dto['password'],
            'address' => $dto['address'],
            'role_id' => $dto['role_id'],
            'email_verified_at' => now(),
        ]);

        return Utilities::arrayObjectResponse($user->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function updateUser(array $dto): array|object
    {
        $user = User::find($dto['user_id']);
        $updatedUser = tap($user)->update([
            'name' => $dto['name'],
            'email' => $dto['email'],
            'password' => $dto['password'] ?? $user->password,
            'address' => $dto['address'],
            'role_id' => $dto['role_id'],
        ]);

        return Utilities::arrayObjectResponse($updatedUser->toArray());
    }

    /**
     * @param array $dto
     * @return array|object
     */
    public function deleteUser(array $dto): array|object
    {
        $user = User::find($dto['user_id']);
        $deletedUser = tap($user)->delete();

        return Utilities::arrayObjectResponse($deletedUser->toArray());
    }
}
