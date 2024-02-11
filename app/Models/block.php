<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class block extends Model
{
    use HasFactory;

    protected $fillable = [
        'projectID',
        'blockNo',
        'blockExt',
        'numberOfLots',
        'employeeID',
        'modifiedDate',
    ];

    public function employee(){
        return $this->belongsTo(employee::class);
    }

    public function project(){
        return $this->belongsTo(project::class);
    }

    public function lot(){
        return $this->hasMany(lot::class);
    }
}
