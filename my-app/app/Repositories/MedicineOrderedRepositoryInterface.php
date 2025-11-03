<?php

namespace App\Repositories;

interface MedicineOrderedRepositoryInterface extends BaseRepositoryInterface
{
    // Get order history for one medicine
    public function getOrdersByMedicine($medicineId);
    
    // Get orders from last month
    public function getRecentOrders($days = 30);
    
    // Count total medicine received
    public function getTotalReceivedByMedicine($medicineId);
}
