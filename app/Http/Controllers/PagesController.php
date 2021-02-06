<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blank()
    {
        return view('pages.blank');
    } 

    public function index()
    {
        return view('pages.dashboard');
    }     

    public function dashboard2()
    {
        return view('pages.dashboard2');
    }   
    
    public function widget()
    {
        return view('pages.widget');
    }     

    public function mailbox()
    {
        return view('pages.mailbox');
    }  
    
    public function calendar()
    {
        return view('pages.calendar');
    }        
}
