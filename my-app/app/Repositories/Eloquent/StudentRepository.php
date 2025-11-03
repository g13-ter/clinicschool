<?php

namespace App\Repositories\Eloquent;

use App\Models\Student;
use App\Repositories\StudentRepositoryInterface;

class StudentRepository extends BaseRepository implements StudentRepositoryInterface
{
    public function __construct(Student $model)
    {
        parent::__construct($model);
    }

    // search by student ID
    public function findByStudentId($studentId)
    {
        $student = $this->model->where('student_id', $studentId)->firstOrFail();
        return $student;
    }

    // get students with visits
    public function getStudentsWithClinicVisits()
    {
        $students = $this->model->with('clinicVisits')->get();
        return $students;
    }

    // get students by grade
    public function getStudentsByGradeLevel($gradeLevel)
    {
        $students = $this->model
            ->where('grade_level', $gradeLevel)
            ->orderBy('last_name')
            ->orderBy('first_name')
            ->get();
        return $students;
    }
}
