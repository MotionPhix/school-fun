<?php

namespace App\Repositories;

use App\Models\SchoolClass;
use App\Interfaces\SchoolClassInterface;
use App\Models\Teacher;

class SchoolClassRepository implements SchoolClassInterface
{
  public function create($request)
  {
    try {

      SchoolClass::create($request);

    } catch (\Exception $e) {

      throw new \Exception('Failed to create School Class. ' . $e->getMessage());

    }
  }

  public function getAllBySchoolYear($school_year_id)
  {
    return SchoolClass::where('school_year_id', $school_year_id)->get();
  }

  public function getAllBySchoolYearAndTeacher($school_year_id, $teacher_id)
  {
    return Teacher::with('schoolClass')->where('teacher_id', $teacher_id)
      ->where('school_year_id', $school_year_id)
      ->get();
  }

  public function getAllWithCoursesBySchoolYear($school_year_id)
  {
    return SchoolClass::with(['courses', 'syllabi'])->where('school_year_id', $school_year_id)->get();
  }

  public function getClassesAndSections($school_year_id)
  {
    $school_classes = $this->getAllWithCoursesBySchoolYear($school_year_id);

    $sectionRepository = new SectionRepository();

    $school_sections = $sectionRepository->getAllBySchoolYear($school_year_id);

    $data = [
      'school_classes' => $school_classes,
      'school_sections' => $school_sections,
    ];

    return $data;
  }

  public function findById($class_id)
  {
    return SchoolClass::find($class_id);
  }

  public function update($request)
  {
    try {
      SchoolClass::find($request->class_id)->update([
        'class_name'  => $request->class_name,
      ]);
    } catch (\Exception $e) {
      throw new \Exception('Failed to update School Class. ' . $e->getMessage());
    }
  }
}
