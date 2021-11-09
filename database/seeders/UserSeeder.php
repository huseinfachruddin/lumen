<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $data = new User;
        $data->name = 'husein fachruddin';
        $data->email = 'husein@gmail.com';
        $data->password = app('hash')->make('password');
        $data->save();
    }
}
