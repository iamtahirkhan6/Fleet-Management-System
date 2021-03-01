<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use App\Domain\Company\Models\Company;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @param         $company
     *
     * @return User
     */

    public function create(array $input) : User
    {
        Validator::make($input, [
            'name'              => ['required', 'string', 'max:255'],
            'phone_number'      => ['required', 'integer', 'digits:10', 'unique:users,phone_number'],
            'password'          => $this->passwordRules(),
            'terms'             => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'company_name'      => 'required',
            'short_code'        => 'required|alpha|unique:companies,short_code',
            'gstn'              => 'nullable|size:15|alpha_num',

        ])->validate();

        $user = User::create([
                                 'name'         => $input['name'],
                                 'phone_number' => $input['phone_number'],
                                 'password'     => Hash::make($input['password']),
                             ]);

        $company = "";
        if (isset($input->gstn)) {
            $company = Company::firstOrCreate(['gstn' => $input['gstn']], ['user_id' => $user->id, 'name' => $input['name'], 'short_code' => $input['short_code']]);
        } else {
            $company = Company::firstOrCreate(['user_id' => $user->id, 'name' => $input['name'], 'short_code' => $input['short_code']]);
        }

        $user->attachRole('manager');
        $user->company_id = $company->id;
        $user->save();

        return $user;
    }
}
