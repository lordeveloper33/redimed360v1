<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserInit extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'User Admin',
            'email'=>'root@admin.com',
            'password'=>Hash::make('admin.12345'),
            'role'=>0
        ]);
    }
}
