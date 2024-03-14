<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FeedSchedule extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the user that owns the FeedSchedule
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the feedScheduleTime for the FeedSchedule
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function feedScheduleTime(): HasMany
    {
        return $this->hasMany(FeedScheduleTime::class);
    }
}
