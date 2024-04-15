<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeSystem extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade_system_name',
        'school_class_id',
        'semester_id',
        'school_year_id'
    ];

    public function semester() {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    public function schoolClass() {
        return $this->belongsTo(SchoolClass::class, 'school_class_id');
    }
}
