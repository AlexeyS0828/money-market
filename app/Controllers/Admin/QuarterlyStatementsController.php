<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;

class QuarterlyStatementsController extends BaseController
{

    public function index() 
    {
        $user = get_selected_user();
        if(!$user)
        {
            return redirect()->to('/admin/user-list');
        }
        $data['user'] = $user;
        $session = session();
        $data['title'] = "Current Holding (" . $session->get('selected_user_name') . ")";
        return view("admin/quarterly-statements", $data);
    }

    public function user_data($id = null)
    {
        $data['user'] = select_user($id);
        $session = session();
        $data['title'] = "Quarterly-Statements (" . $session->get('selected_user_name') . ")";
        return view("admin/quarterly-statements", $data);
    }
}