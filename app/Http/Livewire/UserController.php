<?php


namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showProfile()
    {
        return view('main.profile');
    }
}
