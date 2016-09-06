<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

/*
|--------------------------------------------------------------------------
| Initial User Seed Data
|--------------------------------------------------------------------------
|
| Here you may set the user information details for the application
| administrator. Don't worry, you can always edit these
| details within the application.
|
*/
class UsersTableSeeder extends Seeder
{
    /**
     * Run the User model database seed.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('users')->insert([
            /*
            |--------------------------------------------------------------------------
            | Summary
            |--------------------------------------------------------------------------
            */
            'bio'           => '默默无闻小屌丝一枚!',

            /*
            |--------------------------------------------------------------------------
            | Basic Information
            |--------------------------------------------------------------------------
            */
            'first_name'    => 'zhou',
            'last_name'     => 'boqi',
            'display_name'  => 'zimu',
            'job'           => 'Web Developer',
            'gender'        => 'Male',
            'birthday'      => '1990-05-12',
            'relationship'  => '单身',

            /*
            |--------------------------------------------------------------------------
            | Contact Information
            |--------------------------------------------------------------------------
            */
            'phone'         => '18643627216',
            'email'         => '1jingzhongren@163.com',
            'twitter'       => 'username',      // Example: https://twitter.com/username
            'facebook'      => 'username',      // Example: https://facebook.com/username
            'github'        => 'username',      // Example: https://github.com/username
            'linkedin'      => 'username',      // Example: https://linkedin.com/username
            'address'       => '1200 Main Street',
            'city'          => 'Minneapolis',
            'country'       => 'USA',

            /*
            |--------------------------------------------------------------------------
            | Misc Information
            |--------------------------------------------------------------------------
            */
            'url'           => 'www.tujinglife.com',
            'password'      => bcrypt('a7234738'),

            /*
            |--------------------------------------------------------------------------
            | Timestamps
            |--------------------------------------------------------------------------
            */
            'created_at'    => Carbon\Carbon::now(),
            'updated_at'    => Carbon\Carbon::now(),
        ]);
    }
}
