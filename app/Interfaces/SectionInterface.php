<?php

namespace App\Interfaces;

interface SectionInterface {
    public function create($request);

    public function getAllBySchoolYear($school_year_id);

    public function findById($section_id);

    public function getAllByClassId($class_id);

    public function update($request);
}
