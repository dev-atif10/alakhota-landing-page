<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinRequestController extends Controller
{
    public function show()
    {
        return view('join-request');
    }
}
