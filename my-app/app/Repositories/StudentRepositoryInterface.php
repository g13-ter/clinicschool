<?php

namespace App\Repositories;

interface StudentRepositoryInterface extends BaseRepositoryInterface
{
    // Find student by their student ID
    public function findByStudentId($studentId);
    
    // Get students with all their clinic visits
    public function getStudentsWithClinicVisits();
    
    // Get students by grade level
    public function getStudentsByGradeLevel($gradeLevel);
}
