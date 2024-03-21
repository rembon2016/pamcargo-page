<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Office extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'offices';

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(
            related: Country::class,
            foreignKey: 'country_id'
        );
    }

    /**
     * @return BelongsTo
     */
    public function continent(): BelongsTo
    {
        return $this->belongsTo(
            related: Continent::class,
            foreignKey: 'continent_id'
        );
    }
}
