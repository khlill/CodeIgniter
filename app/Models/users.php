<?php
namespace App\Models;
use CodeIgniter\Model;

class users extends Model {
    protected $table = 'users';
    protected $allowedFields = ['name','email','password', 'created_at'];

}
