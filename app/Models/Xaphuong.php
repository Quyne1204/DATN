<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xaphuong extends Model
{
    use HasFactory;
    protected $table = 'xaphuong';
    protected $fillable= [
        'id',
        'name',
        'type',
        'id_qh',
        'created_at',
        'updated_at',
    ];
}
