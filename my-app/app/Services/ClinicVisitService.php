<?php

namespace App\Services;

use App\Repositories\ClinicVisitRepositoryInterface;
use App\Repositories\StudentRepositoryInterface;
use App\Repositories\MedicineRepositoryInterface;
use App\Models\VisitMedicine;

class ClinicVisitService
{
    public function __construct(
        private ClinicVisitRepositoryInterface $clinicVisitRepository,
        private StudentRepositoryInterface $studentRepository,
        private MedicineRepositoryInterface $medicineRepository
    ) {}

    // get all visits
    public function getAllVisits()
    {
        $visits = $this->clinicVisitRepository->getVisitsWithMedicines();
        return $visits;
    }

    // get single visit
    public function getVisitById($id)
    {
        $visit = $this->clinicVisitRepository->find($id);
        return $visit;
    }

    // get recent visits
    public function getRecentVisits($days = 7)
    {
        $visits = $this->clinicVisitRepository->getRecentVisits($days);
        return $visits;
    }

    // save visit and give medicines
    public function createVisitWithMedicines(array $visitData, array $medicines = [])
    {
        // check student exists
        $student = $this->studentRepository->find($visitData['student_id']);
        
        // save visit
        $visit = $this->clinicVisitRepository->create($visitData);
        
        // give medicines if any
        if (!empty($medicines)) {
            foreach ($medicines as $med) {
                VisitMedicine::create([
                    'visit_id' => $visit->id,
                    'medicine_id' => $med['medicine_id'],
                    'quantity_given' => $med['quantity_given']
                ]);
                
                // reduce stock
                $this->medicineRepository->updateStock(
                    $med['medicine_id'],
                    -$med['quantity_given']
                );
            }
        }
        
        $visit->load('visitMedicines.medicine', 'student');
        return $visit;
    }

    // edit visit
    public function updateVisit($id, array $data)
    {
        $visit = $this->clinicVisitRepository->update($id, $data);
        return $visit;
    }

    // remove visit
    public function deleteVisit($id)
    {
        $this->clinicVisitRepository->delete($id);
    }

    // get visits by date
    public function getVisitsByDateRange($startDate, $endDate)
    {
        $visits = $this->clinicVisitRepository->getVisitsByDateRange($startDate, $endDate);
        return $visits;
    }

    // get student history
    public function getStudentVisitHistory($studentId)
    {
        $visits = $this->clinicVisitRepository->getVisitsByStudent($studentId);
        return $visits;
    }
}
