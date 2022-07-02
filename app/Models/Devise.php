<?php

namespace App\Models;

use App\Models\DevisePrice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Devise extends Model
{
    use HasFactory;

    public function devisePrices(){
        return $this->hasMany(DevisePrice::class);
    }
}
