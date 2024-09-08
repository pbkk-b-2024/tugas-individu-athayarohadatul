<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    use HasFactory;
    protected $fillable = ['ktp', 'nama', 'email', 'phone'];
    protected $table = 'guest';
    public $timestamps = false;
}
