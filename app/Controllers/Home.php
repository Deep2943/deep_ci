<?php

namespace App\Controllers;

class Home extends BaseController
{

    // function __construct() {
    //     parent::__construct();
    // }

    public function index()
    {
        $data['title'] = "Home";
        return view('pages/home', $data);
    }

    public function about(){
        $data['title'] = "About Us";
        return view('pages/about', $data);
    }

    public function contact_us(){
        $data['title'] = "Contact Us";
        return view('pages/contact-us', $data);
    }
}
