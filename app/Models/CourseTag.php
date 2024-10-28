<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $course_id
 * @property string $tag_name
 */
class CourseTag extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'course_id', 'tag_name'];
}
