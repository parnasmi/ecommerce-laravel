<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::create([
            'name' => [
                'uz' => 'Stullar',
                'ru' => 'Стулья',
            ],
        ]);

        Category::create([
            'name' => [
                'uz' => 'Kreslo',
                'ru' => 'Кресло',
            ],
        ]);

        Category::create([
            'name' => [
                'uz' => 'Jadval',
                'ru' => 'Стол',
            ],
        ]);

        Category::create([
            'name' => [
                'uz' => 'To\'shak',
                'ru' => 'Диван',
            ],
        ]);
    }
}
