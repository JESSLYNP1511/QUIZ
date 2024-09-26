<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tBarang extends Model
{
    use HasFactory;
    protected $fillable = ['kode_barang','nama_barang','satuan','harga_jual','harga_beli','stok','status'];
}
