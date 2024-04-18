<?php

namespace App\Repositories;

use App\Models\Semester;
use App\Models\Teacher;
use App\Interfaces\TeacherInterface;

class TeacherRepository implements TeacherInterface
{

  public function assign($request)
  {
    try {

      Teacher::create($request);

    } catch (\Exception $e) {

      throw new \Exception('Failed to assign teacher. ' . $e->getMessage());

    }
  }

  public function getTeacherCourses($session_id, $teacher_id, $semester_id)
  {
    if ($semester_id == 0) {

      $semester_id = Semester::where('session_id', $session_id)
        ->first()->id;

    }

    return Teacher::with(['course', 'schoolClass', 'section'])->where('session_id', $session_id)
      ->where('teacher_id', $teacher_id)
      ->where('semester_id', $semester_id)
      ->get();
  }

  public function getAssignedTeacher($session_id, $semester_id, $class_id, $section_id, $course_id)
  {
    if ($semester_id == 0) {
      $semester_id = Semester::where('session_id', $session_id)
        ->first()->id;
    }

    return Teacher::where('session_id', $session_id)
      ->where('semester_id', $semester_id)
      ->where('class_id', $class_id)
      ->where('section_id', $section_id)
      ->where('course_id', $course_id)
      ->first();
  }
}
