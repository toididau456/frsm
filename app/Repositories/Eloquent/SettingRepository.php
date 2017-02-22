<?php

namespace App\Repositories\Eloquent;

use App\Models\Setting;
use App\Repositories\Contracts\SettingRepositoryInterface;

class SettingRepository extends Repository implements SettingRepositoryInterface
{
    public function model()
    {
        return Setting::class;
    }
}
