<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanSementara extends Model
{
    use HasFactory;
    protected $fillable = ['menu', 'harga', 'jumlah', 'total' , 'status' ];
}
