<?php 
namespace App\Controllers;
use App\Models\BanksModel;
use App\Models\UserTransactionModel;
use App\Models\UserModel;

class CurrentHoldingsController extends BaseController
{
    protected $current_page = 'current-holdings';
    public function index()
    {
        $userModel = new UserModel();
        $banksModel = new BanksModel();
        $transactionModel = new UserTransactionModel();
        $data = [
            'current_page' => $this->current_page,
            'title' => "Current Holdings",
        ];
        $user_id = session()->get('id');
        $data['bank_details'] = $banksModel->get_bankData($user_id);
        $data['transaction_history'] = $transactionModel->where("user_id", $user_id)->findAll();
        $data['user'] = $userModel->where("user_id", $user_id)->first();
        
        return view('/front/' . $this->current_page, $data);
    }
}