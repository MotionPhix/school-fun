<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\Repositories\TeacherRepository;

trait TeacherCheck
{
  /**
   * @param  \Illuminate\Http\Request $request
   * @param int $current_school_year_id
   * @return string
   */
  public function userIsTeacher(Request $request, $current_school_year_id)
  {
    $teacherRepository = new TeacherRepository();

    $teacher = $teacherRepository->getAssignedTeacher(
      $current_school_year_id,
      $request->semester_id,
      $request->class_id,
      $request->section_id,
      $request->course_id
    );

    if ($teacher === null || $teacher->teacher_id !== auth()->user()->id) {
      abort(404);
    }
  }
}
