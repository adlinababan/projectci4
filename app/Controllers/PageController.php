<?php

namespace App\Controllers; 
class PageController extends BaseController 
{ 
    public function home() 
    { 
        return view('home'); 
    } 
    public function about() 
    { 
        return view('about'); 
    }
    public function login() 
    { 
        return view('login'); 
    }    
    public function test() 
    { 
        return view('test'); 
    }    
    
}