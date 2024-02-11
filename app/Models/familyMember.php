<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class familyMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'beneficiaryID',
        'fullName',
        'relationToFamilyHead',
        'birthdate',
        'occupation',
        'monthlyIncome',
    ];

    public function client(){
        return $this->belongsTo(client::class);
    } 
}
