<?php

namespace App\Repositories\Eloquent;

use App\Models\Medicine;
use App\Repositories\MedicineRepositoryInterface;
use Carbon\Carbon;

class MedicineRepository extends BaseRepository implements MedicineRepositoryInterface
{
    public function __construct(Medicine $model)
    {
        parent::__construct($model);
    }

    // get low stock medicines
    public function getLowStockMedicines($threshold = 10)
    {
        $medicines = $this->model
            ->where('stock_quantity', '<=', $threshold)
            ->orderBy('stock_quantity')
            ->get();
        return $medicines;
    }

    // get expiring medicines
    public function getExpiringSoon($days = 30)
    {
        $today = Carbon::now();
        $futureDate = $today->addDays($days);
        
        $medicines = $this->model
            ->whereDate('expiration_date', '<=', $futureDate)
            ->whereDate('expiration_date', '>=', Carbon::now())
            ->orderBy('expiration_date')
            ->get();
        return $medicines;
    }

    // add or remove stock
    public function updateStock($medicineId, $quantity)
    {
        $medicine = $this->model->where('medicine_id', $medicineId)->firstOrFail();
        $medicine->stock_quantity = $medicine->stock_quantity + $quantity;
        $medicine->save();
        
        return $medicine;
    }
}
