<?php
namespace App\Models;
use CodeIgniter\Model;

class RequestModel extends Model{
    protected $table = 'requests';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'sender_name',
        'sender_surname',
        'employee_email',
        'title',
        'description',
        'status',
        'created_at',
        'updated_at'
    ];
}
