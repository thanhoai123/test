<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModels extends Model
{
    use HasFactory;
    protected $table='sinhviens';


    public function diems()
    {
        return $this->hasMany('App\Diem','sinhvien_id','id');
    }
    public function lops()
    {
        return $this->belongsTo('App\Lop','lop_id','id');
    }
}
