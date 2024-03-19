<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imprint extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'imprints';

    /**
     * @var array
     */
    protected $guarded = ['id'];
}
