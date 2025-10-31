<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitMedicine extends Model
{
    use HasFactory;

    protected $table = 'visit_medicines';

    protected $fillable = [
        'visit_id',
        'medicine_id',
        'quantity_given'
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id', 'medicine_id');
    }

    public function clinicVisit()
    {
        return $this->belongsTo(ClinicVisit::class, 'visit_id', 'id');
    }
}
