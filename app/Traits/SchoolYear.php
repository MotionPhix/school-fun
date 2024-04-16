<?php

namespace App\Traits;

trait SchoolYear {
    /**
     * @param string $request
     *
     * @return string
    */
    public function getCurrentSchoolYear() {

        $current_school_year_id = 0;

        if (session()->has('browse_session_id')) {

            $current_school_year_id = session('browse_session_id');

        } else {

            $latest_school_year = $this->schoolYearRepository->getLatestYear();

            if ($latest_school_year) {

                $current_school_year_id = $latest_school_year->id;

            }
        }

        return $current_school_year_id;

    }
}
