<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        Category::truncate();
        Category::create([
            'title'=> 'Editorials',
            'color'=> "#000000",
        ]);
        Category::create([
            'title'=> 'National',
            'color'=> "#000000",
        ]);
        Category::create([
            'title'=> 'Politics',
            'color'=> "#000000",
        ]);
        Category::create([
            'title'=> 'International',
            'color'=> "#000000",
        ]);
        Category::create([
            'title'=> 'Science and Technology',
            'color'=> "#000000",
        ]);
        Category::create([
            'title'=> 'Articles',
            'color'=> "#000000",
        ]);
    }
}
