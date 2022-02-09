<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;

class AdminiController extends BaseController
{
    protected $current_page = 'home';
    public function index()
    {
        return redirect()->to('/admin/user-list');
    }

    
    public function signin()
    {
        helper(['form']);
        echo view('admin/signin');
    } 

    public function signout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin/signin');
    }

    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('user_email', $email)->where('is_admin', 1)->first();
        
        if($data){
            $pass = $data['user_password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['user_id'],
                    'name' => $data['user_name'],
                    'email' => $data['user_email'],
                    'isLoggedIn' => TRUE,
                    'isAdmin' => TRUE,
                ];
                $session->set($ses_data);
                return redirect()->to('/admin');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/admin/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/admin/signin');
        }
    }
}
