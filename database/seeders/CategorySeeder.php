<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Web Designing',
                'slug' => 'web-designing',
                'logo' => '',
                'priority' => 1,
                'enable_homepage' => 1,
                'description' => '',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HTML',
                'slug' => 'html',
                'logo' => '',
                'priority' => 1,
                'enable_homepage' => 1,
                'description' => '',
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CSS',
                'slug' => 'css',
                'logo' => '',
                'priority' => 2,
                'enable_homepage' => 1,
                'description' => '',
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bootstrap CSS',
                'slug' => 'bootstrap-css',
                'logo' => '',
                'priority' => 3,
                'enable_homepage' => 1,
                'description' => '',
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Tailwind CSS',
                'slug' => 'tailwind-css',
                'logo' => '',
                'priority' => 4,
                'enable_homepage' => 1,
                'description' => '',
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'logo' => '',
                'priority' => 2,
                'enable_homepage' => 1,
                'description' => '',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PHP',
                'slug' => 'php',
                'logo' => '',
                'priority' => 1,
                'enable_homepage' => 1,
                'description' => '',
                'parent_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'logo' => '',
                'priority' => 2,
                'enable_homepage' => 1,
                'description' => '',
                'parent_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
