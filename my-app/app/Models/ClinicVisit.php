<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicVisit extends Model
{
    use HasFactory;

    protected $table = 'clinic_visits';

    protected $fillable = [
        'student_id',
        'visit_date',
        'complaint',
        'diagnosis',
        'treatment',
        'notes'
    ];

    protected $casts = [
        'visit_date' => 'date'
    ];

    /**
     * Get the student that made this clinic visit
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Get all medicines given during this visit
     */
    public function visitMedicines()
    {
        return $this->hasMany(VisitMedicine::class, 'visit_id');
    }

    /**
     * Get medicines through the pivot table
     */
    public function medicines()
    {
        return $this->belongsToMany(Medicine::class, 'visit_medicines', 'visit_id', 'medicine_id')
            ->withPivot('quantity_given')
            ->withTimestamps();
    }
}
