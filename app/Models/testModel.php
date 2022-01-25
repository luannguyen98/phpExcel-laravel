<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class testModel extends Model
{
    
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'email'
    ];
    protected $primaryKey = "id";
    protected $table = 'employee';
}
