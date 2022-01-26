<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        DB::table('users')->truncate();
        
        $user = new User();
        $user->name = 'Osrin';
        $user->email = 'osrin@gmail.com';
        $user->telp_no = 81234567890;
        $user->home_address = "Parung";
        $user->password = Hash::make('1234qweR!');
        $user->save();
        
        $user = new User();
        $user->name = 'Ringo';
        $user->email = 'ringo@gmail.com';
        $user->telp_no = 81234567891;
        $user->home_address = "Tangerang Selatan";
        $user->password = Hash::make('1234qweR!');
        $user->save();
        
        $user = new User();
        $user->name = 'Kevin';
        $user->email = 'kevin@gmail.com';
        $user->telp_no = 81234567892;
        $user->home_address = "Jakarta Barat";
        $user->password = Hash::make('1234qweR!');
        $user->save();
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
