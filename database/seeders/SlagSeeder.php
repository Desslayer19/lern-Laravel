<?php

namespace Database\Seeders;

use App\Models\Slag;
use Illuminate\Database\Seeder;

class SlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Slag::create([
        "jenis_slag" => "Web developer",
        "nama_slag" => "web-developer",
        "color_id" => "bg-amber-200"
       ]);

        Slag::create([
        "jenis_slag" => "Software Enginer",
        "nama_slag" => "software-enginer",
        "color_id" => "bg-blue-200"
       ]);

        Slag::create([
        "jenis_slag" => "Artificial Intelegen & IoT",
        "nama_slag" => "artifical-intelegen-&-IoT",
        "color_id" => "bg-green-200"
       ]);
    }
}
