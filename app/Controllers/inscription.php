<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class inscription extends Controller
{
    public function index()
    {
        echo view('inscription');
    }
}