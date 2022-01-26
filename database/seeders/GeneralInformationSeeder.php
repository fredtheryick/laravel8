<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\GeneralInformation;

class GeneralInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_informations')->truncate();
        
        $data = array(
            array('created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'key' => 'application_name', 'value' => 'Laravel 8'),
            array('created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'key' => 'home_url', 'value' => 'https://laravel8.id'),
            array('created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'key' => 'logo_url', 'value' => 'https://laravel8.id/packages/img/logo.png'),
            array('created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'key' => 'telephone', 'value' => '(+62)21-8765-4321'),
            array('created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'key' => 'mobile_phone', 'value' => '(+62)812-3456-7890'),
            array('created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'key' => 'email_support', 'value' => 'support@laravel8.id'),
            array('created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'key' => 'facebook_link', 'value' => 'https://www.facebook.com/laravel8/'),
            array('created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'key' => 'instagram_link', 'value' => 'https://www.instagram.com/laravel8/'),
            array('created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'key' => 'facebook_name', 'value' => 'Laravel 8'),
            array('created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'key' => 'instagram_name', 'value' => 'Laravel 8'),
            array('created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'key' => 'copyright', 'value' => 'Copyright &copy; (2022) Laravel 8'),
        );
        
        GeneralInformation::insert($data);
    }
}
