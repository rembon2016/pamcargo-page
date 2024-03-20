<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * @return void
     */
    protected static function booted(): void
    {
        static::creating(function ($role) {
            $role->name = Str::lower($role->name);
            $role->guard_name = config('auth.defaults.guard');
        });
    }

    /**
     * @var string
     */
    protected $table = 'roles';

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(
            related: User::class,
            foreignKey: 'role_id',
        );
    }
}
