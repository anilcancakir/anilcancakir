<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Episode
 * @package App\Models
 * @mixin Model
 * @mixin Builder
 *
 * @property int id
 * @property int series_id
 * @property int episode
 * @property string title
 * @property string description
 * @property string video
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 * @property-read Series series
 */
class Episode extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'series_id', 'episode', 'title', 'description', 'video'
    ];

    /**
     * Episode of series.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function series()
    {
        return $this->belongsTo(Series::class, 'series_id', 'id');
    }
}
