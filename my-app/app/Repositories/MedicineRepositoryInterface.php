<?php

namespace App\Repositories;

interface MedicineRepositoryInterface extends BaseRepositoryInterface
{
    // Get medicines that are running low
    public function getLowStockMedicines($threshold = 10);
    
    // Get medicines expiring soon
    public function getExpiringSoon($days = 30);
    
    // Add or reduce medicine stock
    public function updateStock($medicineId, $quantity);
}
