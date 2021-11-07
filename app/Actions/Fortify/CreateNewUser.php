<?php

namespace App\Actions\Fortify;

use App\Models\Forda;
use App\Models\FordaDaerah;
use App\Models\User;
use App\Models\Peserta;
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
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $forda_daerah = FordaDaerah::first();

        $peserta = Peserta::create([
            'nama_lengkap' => $input['name'],
            'provinsi_domisili_id' => $input['provinsi_domisili_id'],
            'kab_domisili_id' => $input['kab_domisili_id'],
            'alamat' => $input['alamat'],
            'asal_sekolah' => $input['asal_sekolah'],
            'kab_sekolah_id' => $input['kab_sekolah_id'],
            'no_wa' => $input['nomor_whatsapp'],
            'is_pelajar_aktif' => $input['is_pelajar_aktif'],
            'tau_ilits' => $input['tau_ilits'],
            'forda_id' => '1'
        ]);

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'user_type' => 'App\Models\Peserta',
            'user_id' => $peserta->id
        ]);
    }
}
