<?php


namespace App\Http\Livewire;

use App\Http\Requests\changePersonalInfoRequest;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $user = User::getInfo(Auth::id());
        return view('livewire.profile.profile', compact('user'));
    }

    public function changeAvatar(Request $request, User $user)
    {
        $request['profile_photo_path'] = $request['avatar'];
        unset($request['avatar']);

        $validator = Validator::make($request->all(), [
            'profile_photo_path' => ['required', 'mimes:jpeg,png,jpg,svg', 'max:5120'],
        ], [
            'avatar.mimes' => 'Разрешенные форматы: jpeg,png,jpg,svg.',
            'avatar.max' => 'Максимальный размер 5 мб.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $validated = $validator->validated();

        if ($request->file('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
        }

        $user::query()->where('id', '=', Auth::user()->id)->update(['profile_photo_path' => 'storage/' . $path]);

        return redirect(route('profile.index'));
    }

    public function changePersonalInfo(Request $request, User $user)
    {

        $validator = Validator::make($request->all(), [
            'surname' => ['required', 'string',  'min:2', 'max:255'],
            'name' => ['required', 'string',  'min:2', 'max:255'],
            'patronymic' => ['required', 'string',  'min:2', 'max:255'],
            'birthday_date' => ['required', 'date', 'max:255'],
        ], [
            'min' => 'Минимум символов: :min.',
            'confirmed' => 'Пароли не совпадают.',
            'accepted' => 'Согласитесь с нашими условиями.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $validated = $validator->validated();

        $user::query()->where('id', '=', Auth::user()->id)->update($validated);

        return redirect(route('profile.index'));
    }

    public function changeEmail(Request $request, User $user)
    {

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
        ], [
            'max' => 'Максимум символов: :max.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $validated = $validator->validated();

        $validated['password'] = Hash::make($request['password']);

        $user = User::query()->select('password')->find(Auth::id());

        if (!Hash::check($request['password'], $user->password)) {
            return back()->withErrors(['invalid_email' => 'Неверный пароль.'])->withInput($request->all());
        }

        $user::query()->where('id', '=', Auth::user()->id)->update($validated);

        return redirect(route('profile.index'));
    }

    public function changeTel(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'tel' => ['required', 'string', 'min:17', 'max:17', 'unique:users'],
        ], [
            'min' => 'Кол-во символов: :min.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $validated = $validator->validated();

        $validated['password'] = Hash::make($request['password_tel']);

        $user = User::query()->select('password')->find(Auth::id());

        if (!Hash::check($request['password_tel'], $user->password)) {
            return back()->withErrors(['invalid_tel' => 'Неверный пароль.'])->withInput($request->all());
        }

        $user::query()->where('id', '=', Auth::user()->id)->update($validated);

        return redirect(route('profile.index'));
    }

    public function changePassword(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [], [
            'min' => 'Кол-во символов: :min.',
            'same' => 'Пароли не совпадают.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $validated = $validator->validated();

        $request->validate([
            'password_old' => ['required', 'string', 'min:6'],
            'password_new' => ['required', 'string', 'min:6', 'same:password_r'],
            'password_r' => ['required'],
        ]);

        $validated['password'] = Hash::make($request['password_new']);

        $user = User::query()->select('password')->find(Auth::id());

        if (!Hash::check($request['password_old'], $user->password)) {
            return back()->withErrors(['invalid_password' => 'Неверный пароль.'])->withInput($request->all());
        }

        $user::query()->where('id', '=', Auth::user()->id)->update($validated);

        return redirect(route('profile.index'));
    }
}
