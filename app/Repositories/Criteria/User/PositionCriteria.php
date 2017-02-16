<?php
namespace App\Repositories\Criteria\User;

use App\Models\Position;
use App\Repositories\Criteria\Criteria;
use App\Repositories\Contracts\RepositoryInterface as Repository;

class PositionCriteria extends Criteria
{
    private $positionId;

    public function __construct($positionId)
    {
        $this->positionId = $positionId;
    }

    /**
     * @param $model
     * @param Repository $repository
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        if($this->positionId > 0) {
            $model = $model->where('position_id', '=', $this->positionId);
        }

        return $model;
    }
}
