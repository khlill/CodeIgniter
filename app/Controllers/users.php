<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class users extends Controller
{
    public function index()
    {
       /* $session = session();
        if($session->get('name')){
            echo view('index');
        }
       else{
           echo view('login');
       }*/
     echo view('users');

    }

}