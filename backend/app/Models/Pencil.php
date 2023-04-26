<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencil extends Model
{
    use HasFactory;
    use softDeletes;
    
    protected $table = "pencils";
    protected $guarded = false;
}