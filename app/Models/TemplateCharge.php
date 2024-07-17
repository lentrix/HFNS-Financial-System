<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateCharge extends Model
{
    use HasFactory;

    public $fillable = ['sy_id', 'level_id', 'title_id', 'amount'];

    public function level(){
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function sy(){
        return $this->belongsTo(SY::class, 'sy_id');
    }

    public function accountTitle(){
        return $this->belongsTo(AccountTitles::class, 'title_id');
    }
}
