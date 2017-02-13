<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function schedules()
    {
        return $this->belongsToMany(Schedule::class)->withPivot('score')->withTimestamps();
    }
}
