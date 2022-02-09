<?php
namespace App\Controllers;

class ProfileController extends BaseController
{
    protected $current_page = "profile";
    public function index()
    {
        $data = [
            'current_page' => $this->current_page,
            'title' => 'Profile'
        ];
        return view('/front/' . $this->current_page, $data);
    }
}
