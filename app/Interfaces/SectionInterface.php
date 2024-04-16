<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface SectionInterface {

    public function create(Request $request);

    public function getAllBySchoolYear(int $school_year_id);

    public function findById(int $section_id);

    public function getAllByClassId(int $school_class_id);

    public function update(Request $request);
}
