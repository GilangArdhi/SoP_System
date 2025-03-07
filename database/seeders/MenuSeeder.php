<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data dummy untuk makanan
        $foods = [
            ['name' => 'Nasi Goreng', 'image' => 'image.png', 'description' => 'Nasi goreng dengan bumbu rempah.', 'price' => 20000],
            ['name' => 'Mie Ayam', 'image' => 'image.png', 'description' => 'Mie dengan topping ayam manis.', 'price' => 15000],
            ['name' => 'Ayam Bakar', 'image' => 'image.png', 'description' => 'Ayam bakar dengan bumbu khas.', 'price' => 25000],
            ['name' => 'Sate Ayam', 'image' => 'image.png', 'description' => 'Sate ayam dengan saus kacang.', 'price' => 20000],
            ['name' => 'Bakso', 'image' => 'image.png', 'description' => 'Bakso kuah dengan tahu dan mie.', 'price' => 18000],
        ];

        // Data dummy untuk minuman
        $drinks = [
            ['name' => 'Es Teh Manis', 'image' => 'image.png', 'description' => 'Es teh dengan gula manis.', 'price' => 5000],
            ['name' => 'Es Jeruk', 'image' => 'image.png', 'description' => 'Minuman segar dari jeruk peras.', 'price' => 8000],
            ['name' => 'Kopi Hitam', 'image' => 'image.png', 'description' => 'Kopi hitam tanpa gula.', 'price' => 10000],
            ['name' => 'Teh Hangat', 'image' => 'image.png', 'description' => 'Teh panas tanpa gula.', 'price' => 4000],
            ['name' => 'Jus Alpukat', 'image' => 'image.png', 'description' => 'Jus alpukat dengan susu coklat.', 'price' => 15000],
        ];

        // Masukkan data ke dalam tabel `menus`
        foreach (array_merge($foods, $drinks) as $menu) {
            Menu::create($menu);
        }
    }
}
