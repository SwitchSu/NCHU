<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $sort
 * @property string $name
 * @property string $content
 * @property string $img_path
 */
class CourseType extends Model
{
    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'course_type_id');
    }

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'sort', 'name', 'content', 'img_path'];
}
