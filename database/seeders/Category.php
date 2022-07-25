<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            ['category_name' => 'General'],
            ['category_name' => 'Support'],
            ['category_name' => 'Software'],
            ['category_name' => 'Reporting'],
            ['category_name' => 'Sales'],
        ];
        DB::table('category')->insert($categories);
    }
}
