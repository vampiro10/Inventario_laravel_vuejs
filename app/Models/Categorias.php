<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    
    /**
     * Get the phone associated with the user.
     */
    public function productos()
    {
        return $this->hasOne(Productos::class);
    }
}
