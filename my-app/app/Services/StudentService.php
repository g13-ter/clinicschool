<?php

namespace App\Services;

use App\Repositories\StudentRepositoryInterface;
use App\Repositories\ClinicVisitRepositoryInterface;

class StudentService
{
    public function __construct(
        private StudentRepositoryInterface $studentRepository,
        private ClinicVisitRepositoryInterface $clinicVisitRepository
    ) {}

    // get all students
    public function getAllStudents()
    {
        $students = $this->studentRepository->all();
        return $students;
    }

    // get student with their visits
    public function getStudentWithVisitHistory($studentId)
    {
        $student = $this->studentRepository->find($studentId);
        $visits = $this->clinicVisitRepository->getVisitsByStudent($studentId);
        
        $result = [
            'student' => $student,
            'visits' => $visits
        ];
        return $result;
    }

    // add new student
    public function createStudent(array $data)
    {
        $student = $this->studentRepository->create($data);
        return $student;
    }

    // edit student
    public function updateStudent($id, array $data)
    {
        $student = $this->studentRepository->update($id, $data);
        return $student;
    }

    // remove student
    public function deleteStudent($id)
    {
        $this->studentRepository->delete($id);
    }

    // get students by grade level
    public function getStudentsByGradeLevel($gradeLevel)
    {
        $students = $this->studentRepository->getStudentsByGradeLevel($gradeLevel);
        return $students;
    }
}
