<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoomType;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomType::updateOrCreate(
            [
                'name' => 'Deluxe Room'
            ],
            [
                'description' => 'Kamar yang nyaman dengan fasilitas lengkap',
                'capacity' => 2,
                'base_price' => 1000000,
                'is_active' => true
            ]
            );
    }
}
