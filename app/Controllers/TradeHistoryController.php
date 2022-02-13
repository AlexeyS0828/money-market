<?php 
namespace App\Controllers;  
use App\Models\UserTransactionModel;

class TradeHistoryController extends BaseController
{
    protected $current_page = 'trade-history';
    public function index()
    {
        $data = [
            'current_page' => $this->current_page,
            'title' => "Trade History",
        ];
        $transactionModel = new UserTransactionModel();
        $data['transaction_history'] = $transactionModel->get_transaction_history();
        return view('/front/' . $this->current_page, $data);
    }
}