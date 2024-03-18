<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * @var string
     */
    CONST SEA_AIR_TYPE = 'sea';

    /**
     * @var string
     */
    CONST LAND_AIR_TYPE = 'land';

    /**
     * @var string
     */
    protected $table = 'services';

    /**
     * @var array
     */
    protected $guarded = ['id'];
}
