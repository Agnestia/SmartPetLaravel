<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeedScheduleTime extends Model
{
    use HasFactory;

    /**
     * Get the feedSchedule that owns the FeedScheduleTime
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function feedSchedule(): BelongsTo
    {
        return $this->belongsTo(FeedSchedule::class);
    }
}
