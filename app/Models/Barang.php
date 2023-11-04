<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	use HasFactory;

	protected $table = 'barang';

	protected $fillable = ['nama_cust', 'nama_barang', 'no_hp', 'keluhan', 'id_kategori', 'harga', 'tgl_masuk', 'tgl_jadi'];

	public function kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}
}
