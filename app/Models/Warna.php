<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    protected $table = "warna";
    protected $primaryKey = "id_warna";
    protected $guarded = ['id_warna'];
}
