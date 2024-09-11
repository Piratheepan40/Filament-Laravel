<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Student;
use App\Models\Grade;

class Subject extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function grades()
    {
        return $this->belongsToMany(Grade::class);
    }
    use HasFactory,softDeletes;
    protected $fillable=[
        'subject_name',
        'subject_order',
        'color',
        'user_id'

    ];
}
