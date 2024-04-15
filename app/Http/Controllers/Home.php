<?php

namespace App\Http\Controllers;

use App\Traits\SchoolYear;
use App\Interfaces\UserInterface;
use App\Interfaces\SchoolYearInterface;
use App\Interfaces\SchoolClassInterface;
use Illuminate\Http\Request;

class Home extends Controller
{
  use SchoolYear;

  public function __construct(
    private UserInterface $userRepository,
    private SchoolYearInterface $schoolYearRepository,
    private SchoolClassInterface $classRepository
  ) {}

    public function __invoke(Request $request)
    {
      $current_school_year_id = $this->getCurrentSchoolYear();

      $classCount = $this->classRepository->getAllBySchoolYear($current_school_year_id)->count();

      $studentCount = $this->userRepository->getAllStudentsBySessionCount($current_school_year_id);

      // $promotionRepository = new PromotionRepository();

      // $maleStudentsBySession = $promotionRepository->getMaleStudentsBySessionCount($current_school_year_id);

      $teacherCount = $this->userRepository->getAllTeachers()->count();

      // $noticeRepository = new NoticeRepository();

      // $notices = $noticeRepository->getAll($current_school_year_id);

      return view('dashboard', [
        'classCount'    => $classCount,
        'studentCount'  => $studentCount,
        'teacherCount'  => $teacherCount,
        // 'notices'       => $notices,
        // 'maleStudentsBySession' => $maleStudentsBySession,
      ]);
    }
}
