<?php

namespace App\Services;

use App\Repositories\MedicineRepositoryInterface;
use App\Repositories\MedicineOrderedRepositoryInterface;

class MedicineService
{
    public function __construct(
        private MedicineRepositoryInterface $medicineRepository,
        private MedicineOrderedRepositoryInterface $medicineOrderedRepository
    ) {}

    // get all medicines
    public function getAllMedicines()
    {
        $medicines = $this->medicineRepository->all();
        return $medicines;
    }

    // get single medicine
    public function getMedicineById($id)
    {
        $medicine = $this->medicineRepository->find($id);
        return $medicine;
    }

    // add medicine
    public function createMedicine(array $data)
    {
        $medicine = $this->medicineRepository->create($data);
        return $medicine;
    }

    // edit medicine
    public function updateMedicine($id, array $data)
    {
        $medicine = $this->medicineRepository->update($id, $data);
        return $medicine;
    }

    // remove medicine
    public function deleteMedicine($id)
    {
        $this->medicineRepository->delete($id);
    }

    // get low stock medicines
    public function getLowStockMedicines($threshold = 10)
    {
        $medicines = $this->medicineRepository->getLowStockMedicines($threshold);
        return $medicines;
    }

    // get expiring medicines
    public function getExpiringSoonMedicines($days = 30)
    {
        $medicines = $this->medicineRepository->getExpiringSoon($days);
        return $medicines;
    }

    // save order and add stock
    public function recordMedicineOrder(array $orderData)
    {
        // save order
        $order = $this->medicineOrderedRepository->create($orderData);
        
        // update stock
        $this->medicineRepository->updateStock(
            $orderData['medicine_id'],
            $orderData['medicine_received']
        );
        
        return $order;
    }

    // check inventory status
    public function getMedicineInventoryStatus()
    {
        $lowStock = $this->medicineRepository->getLowStockMedicines(10);
        $expiring = $this->medicineRepository->getExpiringSoon(30);
        
        $status = [
            'low_stock' => $lowStock,
            'expiring_soon' => $expiring
        ];
        return $status;
    }
}
