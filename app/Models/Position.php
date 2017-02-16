<?php

namespace App\Models;

use App\Models\Contracts\PositionInterface;
use Illuminate\Database\Eloquent\Model;

class Position extends Model implements PositionInterface
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }
}
