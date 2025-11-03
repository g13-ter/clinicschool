<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineOrdered extends Model
{
    use HasFactory;

    protected $table = 'medicine_ordered';
    protected $primaryKey = 'medicineorder_id';

    protected $fillable = [
        'medicine_id',
        'date_received',
        'medicine_received'
    ];

    protected $casts = [
        'date_received' => 'datetime'
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id', 'medicine_id');
    }
}