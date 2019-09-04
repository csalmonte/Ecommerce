<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function displayAdmin()
    {

    //     $customers = [
    //         'Sample 1',
    //         'Sample 2',
    //         'Sample 3'
    //     ];
    
    //    return view('admin.admin',['chester' => $customers]);
    return view('admin.admin'); 
    }
}
