<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Promotion;

class PromotionRepository
{
  public function assignClassSection($request, $student_id)
  {
    try {
      Promotion::create([
        'student_id'    => $student_id,
        'school_year_id'    => $request['school_year_id'],
        'school_class_id'      => $request['school_class_id'],
        'section_id'    => $request['section_id'],
        'id_card_number' => $request['id_card_number'],
      ]);
    } catch (\Exception $e) {
      throw new \Exception('Failed to add Student. ' . $e->getMessage());
    }
  }

  public function update($request, $student_id)
  {
    try {
      Promotion::where('student_id', $student_id)->update([
        'id_card_number' => $request['id_card_number'],
      ]);
    } catch (\Exception $e) {
      throw new \Exception('Failed to update Student. ' . $e->getMessage());
    }
  }

  public function massPromotion($rows)
  {
    try {
      foreach ($rows as $row) {
        Promotion::updateOrCreate([
          'student_id' => $row['student_id'],
          'school_year_id' => $row['school_year_id'],
          'school_class_id' => $row['school_class_id'],
          'section_id' => $row['section_id'],
        ], [
          'id_card_number' => $row['id_card_number'],
        ]);
      }
    } catch (\Exception $e) {
      throw new \Exception('Failed to promote students. ' . $e->getMessage());
    }
  }

  public function getAll($school_year_id, $school_class_id, $section_id)
  {
    return Promotion::with(['student', 'section'])
      ->where('school_year_id', $school_year_id)
      ->where('school_class_id', $school_class_id)
      ->where('section_id', $section_id)
      ->get();
  }

  public function getAllStudentsBySessionCount($school_year_id)
  {
    return Promotion::where('school_year_id', $school_year_id)
      ->count();
  }

  public function getMaleStudentsBySessionCount($school_year_id)
  {
    $allStudents = Promotion::where(
      'school_year_id', $school_year_id
    )->pluck('student_id')->toArray();

    return User::where('gender', 'Male')
      ->where('role', 'student')
      ->whereIn('id', $allStudents)
      ->count();
  }

  public function getAllStudentsBySession($school_year_id)
  {
    return Promotion::with(['student', 'section'])
      ->where('school_year_id', $school_year_id)
      ->get();
  }

  public function getPromotionInfoById($school_year_id, $student_id)
  {
    return Promotion::with(['student', 'section'])
      ->where('school_year_id', $school_year_id)
      ->where('student_id', $student_id)
      ->first();
  }


  public function getClasses($school_year_id)
  {
    return Promotion::with('schoolClass')->select('school_class_id')
      ->where('school_year_id', $school_year_id)
      ->distinct('school_class_id')
      ->get();
  }

  public function getSections($school_year_id, $school_class_id)
  {
    return Promotion::with('section')->select('section_id')
      ->where('school_year_id', $school_year_id)
      ->where('school_class_id', $school_class_id)
      ->distinct('section_id')
      ->get();
  }

  public function getSectionsBySession($school_year_id)
  {
    return Promotion::with('section')->select('section_id')
      ->where('school_year_id', $school_year_id)
      ->distinct('section_id')
      ->get();
  }
}
