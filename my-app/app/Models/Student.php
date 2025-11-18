<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'student_number',
        'first_name',
        'last_name',
        'age',
        'birth_date',
        'gender',
        'course',
        'grade_level',
        'section',
        'guardian_contact',
        'contact_number',
        'emergency_contact',
        'medical_notes',
        'is_active',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'is_active' => 'boolean',
    ];

    /**
     * Get all clinic visits for this student
     */
    public function clinicVisits()
    {
        return $this->hasMany(ClinicVisit::class);
    }
}