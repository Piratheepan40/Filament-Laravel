<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Grade;
use App\Models\Subject;

class Student extends Model
{
    use HasFactory,softDeletes;
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
    protected $fillable=[
        'first_name',
        'last_name',
        'grade_id',
        'user_id'

    ];
}
