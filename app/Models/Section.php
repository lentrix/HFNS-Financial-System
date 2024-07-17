<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public $fillable = ['level_id', 'name', 'adviser', 'sy_id'];

    public function level(){
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function symlink(){
        return $this->belongsTo(SY::class, 'sy_id');
    }


}
