<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'first_name',
        'last_name',
        'grade_level',
        'section',
        'date_of_birth',
        'gender',
        'medical_notes',
        'contact_number',
        'emergency_contact',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    /**
     * Get all clinic visits for this student
     */
    public function clinicVisits()
    {
        return $this->hasMany(ClinicVisit::class);
    }
}