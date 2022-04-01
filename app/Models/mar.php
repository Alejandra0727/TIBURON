<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mar extends Model
{
    use HasFactory;

    protected $table = 'mar';

    public function tiburones(){
        return $this->hasMany(tiburon::class, 'id');
    }
}
