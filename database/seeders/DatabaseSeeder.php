<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Roti Tawar',
            'description' => 'Roti tawar lembut dan enak.',
            'price' => 15000,
            'image' => 'roti-tawar.jpg'
        ]);
    }
}