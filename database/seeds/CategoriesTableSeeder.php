<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Appetizers', 'First Courses', 'Second Courses', 'Side Dishes', 'Desserts'];

        foreach($categories as $category) {
            $newCategory = new Category();

            $newCategory->name = $category;
            $newCategory->slug = Str::slug($category);

            $newCategory->save();
        }
    }
}
