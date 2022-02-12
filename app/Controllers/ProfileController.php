<?php
namespace App\Controllers;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    protected $current_page = "profile";
    public function index()
    {
        $userModel = new UserModel();
        $data = [
            'current_page' => $this->current_page,
            'title' => 'Profile'
        ];
        $data['user'] = $userModel->where('user_id', session()->get('id'))->first();
        return view('/front/' . $this->current_page, $data);
    }
}
