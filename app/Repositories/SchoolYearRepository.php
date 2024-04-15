<?php

namespace App\Repositories;

use App\Models\SchoolYear;
use App\Interfaces\SchoolYearInterface;

class SchoolYearRepository implements SchoolYearInterface {

    public function getLatestYear() {

        $school_year = SchoolYear::latest()->first();

        if ($school_year) {

            return $school_year;

        } else {

            return (object) ['id' => 0];

        }

    }

    public function getAll() {
        return SchoolYear::get();
    }

    public function getPreviousSchoolYear() {
        $lastTwoSchoolYears = SchoolYear::orderBy('id', 'desc')
                        ->take(2)
                        ->get()
                        ->toArray();
        return (count($lastTwoSchoolYears) < 2)? [] : $lastTwoSchoolYears[1];
    }

    public function createSchoolYear($request) {
        try {
            SchoolYear::create($request);
        } catch (\Exception $e) {
            throw new \Exception('Failed to create school year. '.$e->getMessage());
        }
    }

    public function browse($request) {
        try {
            if(session()->has('browse_session_id')
                && ($request['session_id'] == $this->getLatestYear()->id)
            ) {
                session()->forget(['browse_session_id', 'browse_session_name']);
            } else {
                session(['browse_session_id' => $request['session_id']]);
                session(['browse_session_name' => $this->getSessionById($request['session_id'])->session_name]);
            }
        } catch (\Exception $e) {
            throw new \Exception('Failed to set School Session for browsing. '.$e->getMessage());
        }
    }

    public function getSchoolYearById($id) {
        return SchoolYear::find($id);
    }
}
