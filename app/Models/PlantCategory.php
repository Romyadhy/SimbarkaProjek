<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantCategory extends Model
{
    use HasFactory;
    protected $table = 'plant_categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'description'
    ];
}
