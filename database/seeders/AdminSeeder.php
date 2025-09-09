<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            'id'=> 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'mobile' => '09078601',
            'type' => 'admin',
            'img' => 'momi.jpg',
            'password' =>  Hash::make("1234"),
            'status'=> 1,
        ];

        Admin::insert($adminRecords);
    }
}
