<?php
namespace App\Repositories\Eloquent;

use App\Models\User;

class UserRepository extends Repository
{
    /**
     * @return mixed
     */
    public function model()
    {
        return User::class;
    }
}
