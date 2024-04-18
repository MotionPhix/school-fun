<?php

namespace App\Interfaces;

interface TeacherInterface
{
  public function assign($request);

  public function getTeacherCourses(int $school_year_id, int $teacher_id, int $semester_id);

  public function getAssignedTeacher(
    int $school_year_id,
    int $semester_id,
    int $class_id,
    int $section_id,
    int $course_id
  );
}
