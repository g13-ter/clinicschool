<?php

namespace App\Repositories\Eloquent;

use App\Models\MedicineOrdered;
use App\Repositories\MedicineOrderedRepositoryInterface;
use Carbon\Carbon;

class MedicineOrderedRepository extends BaseRepository implements MedicineOrderedRepositoryInterface
{
    public function __construct(MedicineOrdered $model)
    {
        parent::__construct($model);
    }

    // get medicine order history
    public function getOrdersByMedicine($medicineId)
    {
        $orders = $this->model
            ->where('medicine_id', $medicineId)
            ->with('medicine')
            ->orderBy('date_received', 'desc')
            ->get();
        return $orders;
    }

    // get recent orders
    public function getRecentOrders($days = 30)
    {
        $startDate = Carbon::now()->subDays($days);
        
        $orders = $this->model
            ->where('date_received', '>=', $startDate)
            ->with('medicine')
            ->orderBy('date_received', 'desc')
            ->get();
        return $orders;
    }

    // count total received
    public function getTotalReceivedByMedicine($medicineId)
    {
        $total = $this->model
            ->where('medicine_id', $medicineId)
            ->sum('medicine_received');
        return $total;
    }
}
