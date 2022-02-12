<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;

class CurrentHoldingController extends BaseController
{

    public function index() 
    {
        $user = get_selected_user();
        if(!$user)
        {
            return redirect()->to('/admin/user-list');
        }
        $data['user'] = $user;
        $data['title'] = "Current Holding (" . session()->get('selected_user_name') . ")";
        return view("admin/current-holding", $data);
    }

    public function current_holding($id = null)
    {
        $data['user'] = select_user($id);
        $data['title'] = "Current Holding (" . session()->get('selected_user_name') . ")";
        return view("admin/current-holding", $data);
    }

    public function transaction_history()
    {
        $user = get_selected_user();
        if(!$user)
        {
            return redirect()->to('/admin/user-list');
        }
        $data['user'] = $user;
        $data['title'] = "Transaction History (" . session()->get('selected_user_name') . ")";
        return view("admin/transaction-history", $data);
    }

    public function payment_schedule()
    {
        $user = get_selected_user();
        if(!$user)
        {
            return redirect()->to('/admin/user-list');
        }
        $data['user'] = $user;
        $data['title'] = "Payment Schedule (" . session()->get('selected_user_name') . ")";
        return view("admin/payment-schedule", $data);
    }

    public function bank_status()
    {
        $user = get_selected_user();
        if(!$user)
        {
            return redirect()->to('/admin/user-list');
        }
        $data['user'] = $user;
        $data['title'] = "Bank Status (" . session()->get('selected_user_name') . ")";
        return view("admin/bank-status", $data);
    }
}