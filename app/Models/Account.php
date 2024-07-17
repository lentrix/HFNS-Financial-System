<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'section_id',
        'discounts',
        'lines_printed'
    ];

    public function student(){
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function section(){
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function charge(){
        return $this->hasMany(Charge::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }

}
