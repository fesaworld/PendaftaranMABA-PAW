<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
	protected $table = 'biodatas';
	
	protected $fillable = [
        'nama', 'nisn', 'tempat_lahir', 'tanggal_lahir', 'no_telp', 'alamat', 'un_average', 'no_ijazah', 'foto', 'berkas', 'status', 'total_pembayaran', 'no_test', 'lokasi',
    ];

    public function User()
	{
		return $this->belongsTo('App\User');
	}  
}
