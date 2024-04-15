<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface SchoolClassInterface {

    public function create(Request $request);

    public function getAllBySchoolYear(int $school_year_id);

    public function getAllBySchoolYearAndTeacher(int $school_year_id, int $teacher_id);

    public function getAllWithCoursesBySchoolYear(int $school_year_id);

    public function getClassesAndSections(int $school_year_id);

    public function findById(int $class_id);

    public function update(Request $request);
}
