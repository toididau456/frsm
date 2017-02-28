<?php
namespace App\Repositories\Criteria\Candidate;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Contracts\RepositoryInterface as Repository;
use DB;

class GroupStatusCriteria extends Criteria
{
    public function apply($model, Repository $repository)
    {
        $model = $model->groupBy('status')->select('status', DB::raw('count(status) as countStatus'));

        return $model;
    }
}
