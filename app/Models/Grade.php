<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Student;
use App\Models\Subject;

class Grade extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
    use HasFactory,softDeletes;
    protected $fillable=[
        'grade_name',
        'grade_group',
        'group_order',
        'group_color',
        'user_id'

    ];
}
