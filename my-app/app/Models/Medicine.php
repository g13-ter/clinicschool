<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $table = 'medicine_table';
    protected $primaryKey = 'medicine_id';

    protected $fillable = [
        'name',
        'stock_quantity',
        'expiration_date'
    ];

    protected $casts = [
        'expiration_date' => 'date'
    ];

    public function medicineOrders()
    {
        return $this->hasMany(MedicineOrdered::class, 'medicine_id', 'medicine_id');
    }

    public function visitMedicines()
    {
        return $this->hasMany(VisitMedicine::class, 'medicine_id', 'medicine_id');
    }
}
