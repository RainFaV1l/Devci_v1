<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $this->authorize('view-admin-dashboard', [self::class]);

        return view('livewire.admin.dashboard');

//        $role = Auth::user()->role_id;
//
//        if($role === 3) {
//            return view('livewire.admin.dashboard');
//        } else {
//            abort(403);
//        }
    }
}
