<?php

namespace App\Interfaces;

interface SettingInterface {

    public function getSetting();

    public function updateAttendanceType($request);

    public function updateFinalMarksSubmissionStatus($request);

}
