<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\ConstantModel;

class ProfileController extends BaseController
{
    protected $current_page = "profile";
    public function index()
    {
        $userModel = new UserModel();
        $constantModel = new ConstantModel();

        $data = [
            'current_page' => $this->current_page,
            'title' => 'Profile'
        ];
        $data['user'] = $userModel->where('user_id', session()->get('id'))->first();
        $data['countries'] = $constantModel->get_countries();

        return view('/front/' . $this->current_page, $data);
    }

    public function update()
    {
        helper(['form']);
        $id = $this->request->getVar('user_id');
        $data = $_POST;
        if(isset($data['user_email'])){
            $rules = [
                'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[vss_user.user_email]',
            ];
        }

        if(isset($data['user_password'])){
            $rules = [
                'password'      => 'required|min_length[4]|max_length[50]',
                'confirmpassword'  => 'matches[password]'
            ];
            echo($data['user_password']);exit;
        }

        $userModel = new UserModel();
        $userModel->update($id, $data);

        return redirect()->to("/profile");

    }
}
