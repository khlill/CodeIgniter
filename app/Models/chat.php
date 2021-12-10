<?php
namespace App\Models;
use CodeIgniter\Model;

class chat extends Model {
    protected $table = 'chat';
    protected $allowedFields = ['nom', 'message'];
}
