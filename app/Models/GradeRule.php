<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeRule extends Model
{
    use HasFactory;

    protected $fillable = [
        'point',
        'grade',
        'start_at',
        'end_at',
        'grade_system_id',
        'school_year_id'
    ];

    public function gradeSystem() {
        return $this->belongsTo(GradeSystem::class, 'grade_system_id');
    }
}
