<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Repository;
use App\Repositories\Contracts\ScheduleRepositoryInterface;
use App\Models\Schedule;

class ScheduleRepository extends Repository implements ScheduleRepositoryInterface
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return Schedule::class;
    }
}
