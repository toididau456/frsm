<?php
namespace App\Repositories\Criteria\Field;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Contracts\RepositoryInterface as Repository;

class FieldNotEvaluateCriteria extends Criteria
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function apply($model, Repository $repository)
    {
         return $model->whereNotIn('id', $this->id);
    }
}
