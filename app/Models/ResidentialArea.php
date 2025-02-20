<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentialArea extends Model
{
    use HasFactory;

    public function actuallocations(){
    
        return $this->hasMany(actualLocation::class);
    }
}
