<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $this->authorize('view-admin-dashboard', [self::class]);
        return view('livewire.admin.dashboard.dashboard');
    }

    public function courses()
    {
        $this->authorize('view-admin-dashboard', [self::class]);
        $courses = Course::all();
        return view('livewire.admin.dashboard.dashboard-courses', compact('courses'));
    }

    public function categories()
    {
        $this->authorize('view-admin-dashboard', [self::class]);

        $categories = CourseCategory::all();

        return view('livewire.admin.dashboard.dashboard-categories', compact('categories'));
    }

    public function users()
    {
        $this->authorize('view-admin-dashboard', [self::class]);

        $users = User::all();

        return view('livewire.admin.dashboard.dashboard-users', compact('users'));
    }

    public function groups()
    {
        $this->authorize('view-admin-dashboard', [self::class]);

        $groups = Group::all();

        return view('livewire.admin.dashboard.dashboard-groups', compact('groups'));
    }

    public function applications()
    {
        $this->authorize('view-admin-dashboard', [self::class]);

        return view('livewire.admin.dashboard.dashboard-applications');
    }
}
