<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class CourseShow extends Component
{
    public Collection $courses;

    protected $listeners = [
        'refreshComponent' => 'getCourses',
    ];

    public function getCourses() {
        $this->courses = Course::all();
    }

    public function mount() {
        $this->courses = Course::all();
    }

    public function destroy($id) {
        try {
            Course::find($id)->delete();
            $this->emit('refreshComponent');
        } catch(\Exception $e) {
            session()->flash('error', "Something goes wrong while deleting category!!");
        }
    }

    public function render()
    {
        return view('livewire.admin.dashboard.course-show', ['courses' => $this->courses]);
    }
}
