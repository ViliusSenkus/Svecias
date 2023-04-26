<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pencil extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = "pencils";
    protected $guarded = false;
}
