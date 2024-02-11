<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $fillable = [
        'projectName',
        'location',
        'costPerSqm',
        'interestRate',
        'modifiedDate',
        'numberOfBlocks',
        'downPaymentRate',
        'employeeID',
    ];

    public function employee(){
        return $this->belongsTo(employee::class);
    }

    public function block(){
        return $this->hasMany(block::class);
    }
}
