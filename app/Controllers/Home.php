<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $current_page = 'home';
    public function index()
    {
        $data = [
            'current_page' => $this->current_page,
            'title' => "Home",
        ];
        // return view('/front/' . $this->current_page, $data);
        return redirect()->to('/current-holdings');
    }
}
