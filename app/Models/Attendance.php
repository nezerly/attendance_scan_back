<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'barcode_text',
        'student_name',
        'student_index',
        'student_class'
    ];
    use HasFactory;
}
