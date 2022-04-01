<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiburon extends Model
{
    use HasFactory;

    protected $table = 'tiburon';
    public function mar(){

        return $this->belongsTo(mar::class, 'id_mar');
    }
}
