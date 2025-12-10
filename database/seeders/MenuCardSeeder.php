<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\menucard;

class MenuCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        menucard::create([
            'item_name'=>'hot coffee',
            'item_details' => 'mood freshner',
            'item_price' => '50',
            'item_image' => 'https://plus.unsplash.com/premium_photo-1674327105074-46dd8319164b?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);
    }
}

