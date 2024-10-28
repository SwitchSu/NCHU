<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            course_types_table_seeder::class,
            courses_table_seeder::class,
            // course_tags_table_seeder::class,
        ]);
    }
}
