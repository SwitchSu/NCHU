<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $course_type_id
 * @property string $name
 * @property string $start_time
 * @property string $end_time
 * @property integer $price
 * @property string $content
 * @property string $link
 * @property string $img_path
 */
class Course extends Model
{
    public function courseType()
    {
        return $this->belongsTo('App\Models\CourseType', 'course_type_id');
    }

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'course_type_id', 'name', 'start_time', 'end_time', 'price', 'content', 'link', 'img_path'];
}
