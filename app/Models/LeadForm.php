<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadForm extends Model
{
    use HasFactory;

    protected $table = "lead_form";
    
    protected $fillable = [
        'student_name',
        'parent_name',
        'email_id',
        'mobile_no',
        'student_dob',
        'class_name',
        'class_session',
        'school_branch_name',
        'source',
    ];

    protected $hidden = [];

    protected $casts = [
        'student_dob' => 'date', // Ensure that date is cast properly
    ];
    
}



