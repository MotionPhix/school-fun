<?php

namespace App\Interfaces;

interface SchoolYearInterface {

    public function getLatestYear();

    public function getAll();

    public function getPreviousSchoolYear();

    public function createSchoolYear($request);

    public function getSchoolYearById($id);

    public function browse($request);
}
