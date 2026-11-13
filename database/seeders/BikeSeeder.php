<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bike;

class BikeSeeder extends Seeder
{
    public function run(): void
    {
        $bikes = [
            [
                'serial_number' => 'BK20260001',
                'model' => 'Trek Marlin 7',
                'price_per_hour' => 4.50,
                'status' => 'available',
            ],
            [
                'serial_number' => 'BK20260002',
                'model' => 'Specialized Rockhopper',
                'price_per_hour' => 5.00,
                'status' => 'available',
            ],
            [
                'serial_number' => 'BK20260003',
                'model' => 'Orbea Alma H30',
                'price_per_hour' => 5.50,
                'status' => 'maintenance',
            ],
            [
                'serial_number' => 'BK20260004',
                'model' => 'Giant Talon 2',
                'price_per_hour' => 4.00,
                'status' => 'available',
            ],
            [
                'serial_number' => 'BK20260005',
                'model' => 'Cannondale Trail 6',
                'price_per_hour' => 4.75,
                'status' => 'available',
            ],
            [
                'serial_number' => 'BK20260006',
                'model' => 'Orbea Carpe 40',
                'price_per_hour' => 3.50,
                'status' => 'available',
            ],
            [
                'serial_number' => 'BK20260007',
                'model' => 'Trek FX 2',
                'price_per_hour' => 3.75,
                'status' => 'available',
            ],
            [
                'serial_number' => 'BK20260008',
                'model' => 'Specialized Turbo Vado',
                'price_per_hour' => 8.50,
                'status' => 'available',
            ],
            [
                'serial_number' => 'BK20260009',
                'model' => 'Cube Touring Hybrid',
                'price_per_hour' => 7.50,
                'status' => 'maintenance',
            ],
            [
                'serial_number' => 'BK20260010',
                'model' => 'Bianchi C-Sport',
                'price_per_hour' => 4.25,
                'status' => 'available',
            ],
            [
                'serial_number' => 'BK20260011',
                'model' => 'Giant Escape 3',
                'price_per_hour' => 3.25,
                'status' => 'available',
            ],
            [
                'serial_number' => 'BK20260012',
                'model' => 'Orbea Gain',
                'price_per_hour' => 7.00,
                'status' => 'retired',
            ],
            [
                'serial_number' => 'BK20260013',
                'model' => 'Trek Domane AL 2',
                'price_per_hour' => 6.00,
                'status' => 'available',
            ],
            [
                'serial_number' => 'BK20260014',
                'model' => 'Scott Aspect 950',
                'price_per_hour' => 4.50,
                'status' => 'available',
            ],
            [
                'serial_number' => 'BK20260015',
                'model' => 'Cube Kathmandu Hybrid',
                'price_per_hour' => 8.00,
                'status' => 'available',
            ],
        ];

        foreach ($bikes as $bike) {
            Bike::create($bike);
        }
    }
}