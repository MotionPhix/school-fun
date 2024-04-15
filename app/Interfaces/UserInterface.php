<?php

namespace App\Interfaces;

interface UserInterface {

    public function createTeacher($request);

    public function updateTeacher($request);

    public function createStudent($request);

    public function updateStudent($request);

    public function getAllStudents(int $current_year, int $class_id, int $section_id);

    public function getAllStudentsBySession(int $session_id);

    public function getAllStudentsBySessionCount(int $session_id);

    public function findStudent(int $id);

    public function findTeacher(int $id);

    public function getAllTeachers();

    public function changePassword(string $new_password);
}
