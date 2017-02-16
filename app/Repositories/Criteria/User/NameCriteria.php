<?php
namespace App\Repositories\Criteria\User;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Contracts\RepositoryInterface as Repository;

class NameCriteria extends Criteria
{
    private $keyword;

    public function __construct($keyword)
    {
        $this->keyword = $keyword;
    }

    public function apply($model, Repository $repository)
    {
        $model = $model->where('name', 'LIKE', '%' . $this->keyword . '%');

        return $model;
    }
}
