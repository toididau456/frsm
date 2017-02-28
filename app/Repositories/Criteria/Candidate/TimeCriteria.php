<?php
namespace App\Repositories\Criteria\Candidate;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Contracts\RepositoryInterface as Repository;
use Carbon\Carbon;
use DB;

class TimeCriteria extends Criteria
{
    private $month;

    public function __construct($month)
    {
        $this->month = $month;
    }

    public function apply($model, Repository $repository)
    {
        $model = $model->where('created_at', '>=', Carbon::now()->subMonth($this->month));

        return $model;
    }
}
