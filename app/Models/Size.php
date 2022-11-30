<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = "size";
    protected $primaryKey = "id_size";
    protected $guarded = ['id_size'];
}
