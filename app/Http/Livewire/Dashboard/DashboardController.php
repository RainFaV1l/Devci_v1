<?php

namespace App\Http\Livewire\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->authorize('view-admin-dashboard', [self::class]);
    }

    public function index()
    {
        return view('livewire.admin.dashboard.dashboard');
    }

    public function courses()
    {
        return view('livewire.admin.dashboard.dashboard-courses');
    }

    public function categories()
    {
        $categories = CourseCategory::all();
        return view('livewire.admin.dashboard.dashboard-categories', compact('categories'));
    }

    public function users()
    {
        $users = User::all();
        return view('livewire.admin.dashboard.dashboard-users', compact('users'));
    }

    public function groups()
    {
        $groups = Group::all();
        return view('livewire.admin.dashboard.dashboard-groups', compact('groups'));
    }

    public function applications()
    {
        $this->authorize('view-admin-dashboard', [self::class]);
        return view('livewire.admin.dashboard.dashboard-applications');
    }
}
