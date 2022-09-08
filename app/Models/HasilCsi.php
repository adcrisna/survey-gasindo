<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilCsi extends Model
{
    use HasFactory;
    protected $table = 'hasil_csi';
    public $timestamps = false;
}
