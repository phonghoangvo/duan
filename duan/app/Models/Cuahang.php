<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuahang extends Model
{
    use HasFactory;
    protected $table ='product';
    protected $primaryKey='id';
    protected $dates=['ngayDang'];
    protected $fillable=[
        'name',
        'img',
        'price',
        'priceSale',
        'moTa',
        'hot',
        'hidden',
        'idCategory',
        'tomTat',
        'ngayDang',
    ];
}
