<?php

namespace App\Http\Livewire;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{
    public $password_old, $password_new, $password_r, $user_id, $updatePassword = false;


    // Задание полей для валидации
    protected $rules = [
        'password_old' => ['required', 'string', 'min:6'],
        'password_new' => ['required', 'string', 'min:6', 'same:password_r'],
        'password_r' => ['required'],
    ];

    // Обнуление значений поля input
    private function resetInputFields()
    {
        $this->password_old = '';
        $this->password_new = '';
        $this->password_r = '';
    }

    public function editPost($id)
    {
        try {
            $user = User::findOrFail($id);
            if (!$user) {
                session()->flash('error', 'Post not found');
            } else {
                if (Hash::check($this->password_old, $user['password'])) {
                    if ($this->password_new == $this->password_r) {
                        $this->password_new = $user->password;
                        $this->user_id = $user->id;
                        $this->updatePassword = true;
                    } else {
                        session()->flash('error', 'Post not found');
                    }
                } else {
                    session()->flash('error', 'Post not found');
                }
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }

    public function updatePassword($id)
    {
        $this->validate();
        try {
            User::whereId($id)->update([
                'password' => $this->password_new,
            ]);
            session()->flash('success', 'Post Updated Successfully!!');
            $this->resetFields();
            $this->updatePassword = false;
        } catch (\Exception $ex) {
            session()->flash('success', 'Something goes wrong!!');
        }
    }


    public function render()
    {
        return view('livewire.profile.profile');
    }
}
