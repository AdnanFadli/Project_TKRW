<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTable extends Seeder
{

    public function run(): void
    {
        $userData=[
            [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'password'=>Hash::make('123456'),
            ],
        [
            'name'=>'santri',
            'email'=>'santri@gmail.com',
            'role'=>'santri',
            'password'=>Hash::make('123456'),
        ],
        [
            'name'=>'pimpinan',
            'email'=>'pimpinan@gmail.com',
            'role'=>'pimpinan',
            'password'=>Hash::make('123456'),
        ],
    ];

    foreach($userData as $key => $val){
        User::create($val);

    }
        /*DB::table('users')->insert([
            'name'=>'Adnan',
            'email'=>'adnanfdl222@gmail.com',
            'password'=>Hash::make('123')
        ]);*/
    }
}
