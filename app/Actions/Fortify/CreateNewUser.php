<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
//            'surname' => ['required', 'string', 'max:255'],
//            'name' => ['required', 'string', 'max:255'],
//            'patronymic' => ['required', 'string', 'max:255'],
//            'birthday' => ['required', 'date', 'date', 'max:255'],
//            'tel' => ['required', 'date', 'max:18', 'unique:users'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => $this->passwordRules(),
//            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
//            'surname' => $input['surname'],
//            'name' => $input['name'],
//            'patronymic' => $input['patronymic'],
//            'birthday' => $input['birthday'],
//            'tel' => $input['tel'],
//            'email' => $input['email'],
//            'password' => Hash::make($input['password']),
        ]);
    }
}
