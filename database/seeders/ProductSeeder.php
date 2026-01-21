<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Summit Ridge 4-Person Tent',
                'description' => 'Weatherproof double-layer tent with reinforced fiberglass poles.',
                'price' => 1200,
                'image' => 'https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?auto=format&fit=crop&w=800&q=80'
            ],
            [
                'name' => 'TerraQuest 65L Pack',
                'description' => 'Ergonomic hiking backpack with hydration sleeve and rain cover.',
                'price' => 450,
                'image' => 'https://images.unsplash.com/photo-1551632432-c735e8a0ba19?auto=format&fit=crop&w=800&q=80'
            ],
            [
                'name' => 'Arctic Zero Mummy Bag',
                'description' => 'Rated for -10°C. Features synthetic down insulation.',
                'price' => 300,
                'image' => 'https://images.unsplash.com/photo-1523987355523-c7b5b0dd90a7?auto=format&fit=crop&w=800&q=80'
            ],
            [
                'name' => 'Pathfinder LED Headlamp',
                'description' => '500 lumens with five lighting modes and rechargeable battery.',
                'price' => 150,
                'image' => 'https://images.unsplash.com/photo-1555819206-7b30da4f1506?auto=format&fit=crop&w=800&q=80'
            ],
            [
                'name' => 'Titanium Solo Cookset',
                'description' => 'Ultra-lightweight nesting pot and pan set for hikers.',
                'price' => 280,
                'image' => 'https://images.unsplash.com/photo-1523906630133-f753f0ec627c?auto=format&fit=crop&w=800&q=80'
            ],
            [
                'name' => 'Nomad Solar Charger',
                'description' => '21W high-efficiency solar panels with dual USB ports.',
                'price' => 550,
                'image' => 'https://images.unsplash.com/photo-1617783947474-75ca0d7a7123?auto=format&fit=crop&w=800&q=80'
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}