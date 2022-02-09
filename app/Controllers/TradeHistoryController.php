<?php 
namespace App\Controllers;  
  
class TradeHistoryController extends BaseController
{
    protected $current_page = 'trade-history';
    public function index()
    {
        $data = [
            'current_page' => $this->current_page,
            'title' => "Current Holdings",
        ];
        return view('/front/' . $this->current_page, $data);
    }
}