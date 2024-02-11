<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastName',
        'firstName',
        'midName',
        'position',
        'username',
        'password',
        'entryLevel',
        'status',
    ];

    public function amortizationFactor(){
        return $this->hasMany(amortizationFactor::class);
    }

    public function block(){
        return $this->hasMany(block::class);
    }

    public function client(){
        return $this->hasMany(client::class);
    }

    public function loan(){
        return $this->hasMany(loan::class);
    }

    public function lot(){
        return $this->hasMany(lot::class);
    }

    public function payment(){
        return $this->hasMany(payment::class);
    }

    public function project(){
        return $this->hasMany(project::class);
    }
}
