<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CourseType;

class course_types_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (CourseType::count() > 0) {
            return;
        }
        CourseType::insert(
            [
                [
                    'created_at' => now()->format('Y-m-d'),
                    'updated_at' => now()->format('Y-m-d'),
                    'name' => '兒童營隊',
                    'content' => '體驗平日上課較無機會接觸到的課程，讓小朋友有個難忘且充實的寒暑假。',
                    'img_path' => '/images/main/camp.svg',
                    'sort' => 1,
                ],
                [
                    'created_at' => now()->format('Y-m-d'),
                    'updated_at' => now()->format('Y-m-d'),

                    'name' => '單元手作',
                    'content' => '短時間的學習課程，適合生活忙碌的、想要體驗不同領域或是培養其他興趣的你。',
                    'img_path' => '/images/main/handmade.svg',
                    'sort' => 2,
                ],
                [
                    'created_at' => now()->format('Y-m-d'),
                    'updated_at' => now()->format('Y-m-d'),
                    'name' => '運動課程',
                    'content' => '為期2~3個月運動課程，適合想要運動、喜歡運動或是想挑戰不同以往運動的你。',
                    'img_path' => '/images/main/sport.svg',
                    'sort' => 3,
                ],
                [
                    'created_at' => now()->format('Y-m-d'),
                    'updated_at' => now()->format('Y-m-d'),
                    'name' => '職業訓練',
                    'content' => '適合有較充裕時間，想要了解、學習、體驗更完整不同領域知識的你。',
                    'img_path' => '/images/main/training.svg',
                    'sort' => 4,
                ],
                [
                    'created_at' => now()->format('Y-m-d'),
                    'updated_at' => now()->format('Y-m-d'),
                    'name' => '專業證照',
                    'content' => '由課程專業講師帶領你了解各種專業知識，得到專業認證。',
                    'img_path' => '/images/main/certificate.svg',
                    'sort' => 5,
                ],
            ]
        );
    }
}
