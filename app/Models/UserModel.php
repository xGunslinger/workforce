<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = [
        'name',
        'surname',
        'email',
        'password',
        'position',
        'created_at',
        'working_hours',
        'per_hour_rate',
        'start_at',
        'end_at'
    ];
}

