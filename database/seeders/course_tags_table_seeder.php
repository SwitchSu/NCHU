<?php

namespace Database\Seeders;

use App\Models\CourseTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class course_tags_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if (CourseTag::count() > 0) {
            return;
        }
        $course = Course::all();
        $course->each(function ($course){
            $tags = ['標籤一','標籤二','標籤三','標籤四'];
            foreach ($tags as $tag) {
                CourseTag::insert([
                    'created_at' => now()->format('Y-m-d'),
                    'updated_at' => now()->format('Y-m-d'),
                    'tag_name' => $tag,
                    'course_id' => $course->id,
                ]);
            }

        });
    }
}
