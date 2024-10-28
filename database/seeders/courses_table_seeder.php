<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CourseType;
use App\Models\Course;

class courses_table_seeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::truncate();

        $names = explode("\n", file_get_contents(database_path('seeders/course_texts/courses_names.txt')));
        $contents = explode("\n", file_get_contents(database_path('seeders/course_texts/courses_contents.txt')));
        $start_times = explode("\n", file_get_contents(database_path('seeders/course_texts/courses_start_times.txt')));
        $end_times = explode("\n", file_get_contents(database_path('seeders/course_texts/courses_end_times.txt')));
        $prices = explode("\n", file_get_contents(database_path('seeders/course_texts/courses_prices.txt')));
        $links = explode("\n", file_get_contents(database_path('seeders/course_texts/courses_links.txt')));
        $img_paths = explode("\n", file_get_contents(database_path('seeders/course_texts/courses_img_paths.txt')));

        $index = 0;
        $courseTypes = CourseType::all();

        foreach ($courseTypes as $courseType) {
            Course::insert([
                'created_at' => now()->format('Y-m-d'),
                'updated_at' => now()->format('Y-m-d'),
                'name' => $names[$index],
                'course_type_id' => $courseType->id,
                'start_time' => $start_times[$index],
                'end_time' => $end_times[$index],
                'price' => $prices[$index],
                'content' => $contents[$index],
                'link' => $links[$index],
                'img_path' => $img_paths[$index],
            ]);
            $index++;
        }
    }
}
