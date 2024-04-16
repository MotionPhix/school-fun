<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\SchoolYear;
use App\Interfaces\UserInterface;
use App\Interfaces\CourseInterface;
use App\Interfaces\SectionInterface;
use App\Interfaces\SemesterInterface;
use App\Interfaces\SchoolClassInterface;
use App\Interfaces\SchoolYearInterface;
use App\Interfaces\SettingInterface;

class Setting extends Controller
{
  use SchoolYear;

  public function __construct(
    SettingInterface $settingRepository,
    SchoolYearInterface $schoolYearRepository,
    SchoolClassInterface $schoolClassRepository,
    SectionInterface $schoolSectionRepository,
    UserInterface $userRepository,
    CourseInterface $courseRepository,
    SemesterInterface $semesterRepository
  ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $current_school_year_id = $this->getCurrentSchoolYear();

      $latest_school_year = $this->schoolYearRepository->getLatestYear();

      $academic_setting = $this->settingRepository->getSetting();

      $school_years = $this->schoolYearRepository->getAll();

      $school_classes = $this->schoolClassRepository->getAllByYear($current_school_year_id);

      $school_sections = $this->schoolSectionRepository->getAllByYear($current_school_year_id);

      $teachers = $this->userRepository->getAllTeachers();

      $courses = $this->courseRepository->getAll($current_school_year_id);

      $semesters = $this->semesterRepository->getAll($current_school_year_id);

      return view('settings.years', [
        'current_school_year_id' => $current_school_year_id,
        'latest_school_year_id'  => $latest_school_year->id,
        'academic_setting'          => $academic_setting,
        'school_years'           => $school_years,
        'school_classes'            => $school_classes,
        'school_sections'           => $school_sections,
        'teachers'                  => $teachers,
        'courses'                   => $courses,
        'semesters'                 => $semesters,
      ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
