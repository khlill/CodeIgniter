<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class commande extends Controller
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
     echo view('commande');

    }

}