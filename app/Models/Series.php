<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Series.
 * @mixin Model
 * @mixin Builder
 *
 * @property int id
 * @property string title
 * @property string description
 * @property string image
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 * @property-read Collection|Episode[] episodes
 *
 * @method static self orderBy($column, $direction = 'asc')
 */
class Series extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'image',
    ];

    /**
     * Series of episodes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function episodes()
    {
        return $this->hasMany(Episode::class, 'series_id', 'id');
    }
}
