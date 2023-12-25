<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caraulsel extends Model
{
    protected $fillable = ["name","image","status"];
    use HasFactory;
}
