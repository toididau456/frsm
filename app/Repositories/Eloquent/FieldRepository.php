<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Repository;
use App\Repositories\Contracts\FieldRepositoryInterface;
use App\Models\Field;

class FieldRepository extends Repository implements FieldRepositoryInterface
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return Field::class;
    }
}
