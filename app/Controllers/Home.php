<?php

namespace App\Controllers;
use App\Models\chat;
use App\Models\users;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function sauvegarder()
    {

        
        $rules = [
            'name'          => 'required|max_length[30]',
            'email'         => 'required|max_length[50]|valid_email|is_unique[users.email]',
            'password'      => 'required|max_length[50]',
            
        ];
         
        if($this->validate($rules)){
            $model = new users();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => $this->request->getVar('password')
            ];
            $model->save($data);
            echo view('login');
        }else{
            
            echo view('inscription');
        }
         
    }

    public function auth()
    {
        $session = session();
        $model = new users();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            
            if($pass===$password){
                $ses_data = [
                    'id'       => $data['id'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],

                ];
                $session->set($ses_data);
                return redirect()->to('codeigniter/public/loggedin');
            }
            else{
                $session->setFlashdata('msg', 'Wrong Password');
                echo view('login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            echo view('login');




        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        echo view('login');
    }
           
    


}

