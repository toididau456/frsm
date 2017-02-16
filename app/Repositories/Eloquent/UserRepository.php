<?php
namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository extends Repository implements UserRepositoryInterface
{
    /**
     * @return mixed
     */
    public function model()
    {
        return User::class;
    }
}
