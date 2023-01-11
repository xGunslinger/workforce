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
        'created_at'
    ];
}

