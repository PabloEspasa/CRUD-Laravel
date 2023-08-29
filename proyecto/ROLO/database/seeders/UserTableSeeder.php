<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User;
        $user1->name = 'Emma';
        $user1->email = 'osh@gmail.com';
        $user1->password = 'emma1234';
        $user1->cargo_id = 1;
        $user1->save();
    }
}
