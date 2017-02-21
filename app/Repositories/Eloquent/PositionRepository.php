<?php
namespace App\Repositories\Eloquent;

use App\Models\Position;
use App\Repositories\Contracts\PositionRepositoryInterface;

class PositionRepository extends Repository implements PositionRepositoryInterface
{

    /**
     * @return mixed
     */
    public function model()
    {
        return Position::class;
    }
}
