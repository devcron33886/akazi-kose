<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Jobs',
                'slug' => 'jobs',
                'visible' => true,
            ],
            [
                'name' => 'Tenders',
                'slug' => 'tenders',
                'visible' => true,
            ],
            [
                'name' => 'Consultancy',
                'slug' => 'consultancy',
                'visible' => true,
            ],
            [
                'name' => 'Internships',
                'slug' => 'internships',
                'visible' => true,
            ],
            [
                'name' => 'Public',
                'slug' => 'public',
                'visible' => true,
            ],
            [
                'name' => 'Auction',
                'slug' => 'auction',
                'visible' => true,
            ],
            [
                'name' => 'Others',
                'slug' => 'others',
                'visible' => true,
            ],

        ];

        \App\Models\Category::insert($categories);
    }
}
