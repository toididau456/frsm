<?php
namespace App\Models\Contracts;

interface PermissionInterface
{
    const GROUPS = [
        'user' => 1,
        'candidate' => 2,
        'other' => 3,
    ];
}
