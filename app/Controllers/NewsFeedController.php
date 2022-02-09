<?php
namespace App\Controllers;

class NewsFeedController extends BaseController
{
    protected $current_page = "news-feed";
    public function index()
    {
        $data = [
            'current_page' => $this->current_page,
            'title' => 'News Feed'
        ];
        return view('/front/' . $this->current_page, $data);
    }
}
