<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function displayHomePage()
    {
        return view('homepage');
    } 

    public function displayVersion1()
    {
        return view('v1');
    }

    public function displayVersion2()
    {
        return view('v2');
    }

    public function displayPortfolio()
    {
        return view('portfolio');
    }

    public function displayCheckOut()
    {
        return view('checkout');
    }

    public function displayTest()
    {
       return view('test'); 
    }

    public function displayPricing()
    {
       return view('pricing'); 
    }

    public function displayHomePage1()
    {
       return view('homepage1'); 
    }

    public function displayHomePage2()
    {
       return view('homepage2'); 
    }
}
