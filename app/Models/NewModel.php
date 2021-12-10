<?php
namespace App\Models;
use CodeIgniter\Model;

class NewModel extends Model 
{
    protected $table='fattouma';

    protected $allowedFields = ['Title','Text'];
}