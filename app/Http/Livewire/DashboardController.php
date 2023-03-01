<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $this->authorize('view-admin-dashboard', [self::class]);

        return view('livewire.admin.dashboard.dashboard');

//        $role = Auth::user()->role_id;
//
//        if($role === 3) {
//            return view('livewire.admin.dashboard');
//        } else {
//            abort(403);
//        }
    }

    public function courses() {
        $this->authorize('view-admin-dashboard', [self::class]);

        return view('livewire.admin.dashboard.dashboard-courses');
    }

    public function categories() {
        $this->authorize('view-admin-dashboard', [self::class]);

        $categories = CourseCategory::all();

        return view('livewire.admin.dashboard.dashboard-categories', compact('categories'));
    }

    public function users() {
        $this->authorize('view-admin-dashboard', [self::class]);

        return view('livewire.admin.dashboard.dashboard-users');
    }

    public function groups() {
        $this->authorize('view-admin-dashboard', [self::class]);

        return view('livewire.admin.dashboard.dashboard-groups');
    }

    public function applications() {
        $this->authorize('view-admin-dashboard', [self::class]);

        return view('livewire.admin.dashboard.dashboard-applications');
    }
}
