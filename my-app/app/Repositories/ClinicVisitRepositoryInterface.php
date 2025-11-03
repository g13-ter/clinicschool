<?php

namespace App\Repositories;

interface ClinicVisitRepositoryInterface extends BaseRepositoryInterface
{
    // Get all visits for one student
    public function getVisitsByStudent($studentId);
    
    // Get visits with medicines given
    public function getVisitsWithMedicines();
    
    // Get visits from last few days
    public function getRecentVisits($days = 7);
    
    // Get visits between two dates
    public function getVisitsByDateRange($startDate, $endDate);
}
