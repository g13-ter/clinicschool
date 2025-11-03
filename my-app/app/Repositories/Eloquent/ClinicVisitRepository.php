<?php

namespace App\Repositories\Eloquent;

use App\Models\ClinicVisit;
use App\Repositories\ClinicVisitRepositoryInterface;
use Carbon\Carbon;

class ClinicVisitRepository extends BaseRepository implements ClinicVisitRepositoryInterface
{
    public function __construct(ClinicVisit $model)
    {
        parent::__construct($model);
    }

    // get student visits
    public function getVisitsByStudent($studentId)
    {
        $visits = $this->model
            ->where('student_id', $studentId)
            ->with(['student', 'visitMedicines.medicine'])
            ->orderBy('visit_date', 'desc')
            ->get();
        return $visits;
    }

    // get all visits with medicines
    public function getVisitsWithMedicines()
    {
        $visits = $this->model
            ->with(['student', 'visitMedicines.medicine'])
            ->orderBy('visit_date', 'desc')
            ->get();
        return $visits;
    }

    // get last few days visits
    public function getRecentVisits($days = 7)
    {
        $startDate = Carbon::now()->subDays($days);
        
        $visits = $this->model
            ->where('visit_date', '>=', $startDate)
            ->with(['student', 'visitMedicines.medicine'])
            ->orderBy('visit_date', 'desc')
            ->get();
        return $visits;
    }

    // get visits by date range
    public function getVisitsByDateRange($startDate, $endDate)
    {
        $visits = $this->model
            ->whereBetween('visit_date', [$startDate, $endDate])
            ->with(['student', 'visitMedicines.medicine'])
            ->orderBy('visit_date', 'desc')
            ->get();
        return $visits;
    }
}
