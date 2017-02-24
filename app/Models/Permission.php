<?php

namespace App\Models;

use App\Models\Contracts\PermissionInterface;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model implements PermissionInterface
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
