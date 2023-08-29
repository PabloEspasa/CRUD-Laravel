<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cargo;


class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cargo1 = new Cargo;
        $cargo1->nombre = 'Admin';
        $cargo1->save();

        $cargo2 = new Cargo;
        $cargo2->nombre = 'Cliente';
        $cargo2->save();
    }
}
