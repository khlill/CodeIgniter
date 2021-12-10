<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class login extends Controller
{
    public function index()
    {
        echo view('login');
    }
}