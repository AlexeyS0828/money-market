<?php 
namespace App\Controllers;  
  
class CurrentHoldingsController extends BaseController
{
    protected $current_page = 'current-holdings';
    public function index()
    {
        $data = [
            'current_page' => $this->current_page,
            'title' => "Current Holdings",
        ];
        return view('/front/' . $this->current_page, $data);
    }
}