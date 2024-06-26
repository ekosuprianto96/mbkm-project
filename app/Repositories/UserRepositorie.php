<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\SuperAdmin;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin\UserRepositorieInterface;
use Exception;

class UserRepositorie implements UserRepositorieInterface {

    public function createUserFack() {
        DB::beginTransaction();
        try {

            $user = User::create([
                'id_role' => 2,
                'username' => 'examplemitra',
                'email' => 'example-mitra@gmail.com',
                'password' => Hash::make('123456'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
    
            $superAdmin = SuperAdmin::create([
                'user_id' => $user->id,
                'username' => $user->username,
                'nohp' => '6567657546456',
                'no_ktp' => 546456456456456,
                'nama_lengkap' => 'Example Mitra',
                'jenis_kelamin' => 'pria',
                'tempat_lahir' => 'Jakarta, Kali Baru',
                'tanggal_lahir' => '14-09-1996',
                'agamaidd' => 1,
                'file_foto' => 'default.png'
            ]);

            DB::commit();
            dd('Ok');

        }catch(\Exception $err) {
            DB::rollback();
            dd($err->getMessage().'-'.$err->getLine());
        }
    }

    public static function where($where) {
        return User::where($where);
    }

    public function all() {
        return User::get();
    }

    public function find(int $id_user) {
        return User::find($id_user);
    }

    public function create(array $param = []) {
        return User::create($param);
    }

    public function delete(int $id_user) {
        return User::find($id_user)->delete();
    }

    public function update(int $id_user, array $param = []) {
        return User::fnd($id_user)->update($param);
    }

}