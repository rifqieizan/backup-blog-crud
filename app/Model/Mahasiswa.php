<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    protected $table='mahasiswa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'jurusan', 'ipk','alamat',
    ];

    public function setAtribute($atribute)
    {
    	if (isset($atribute['nama'])) {
    		# code...
    		$this->nama=$atribute['nama'];
    	}

    	if (isset($atribute['alamat'])) {
    		# code...
    		$this->alamat=$atribute['alamat'];
    	}


    	if (isset($atribute['ipk'])) {
    		# code...
    		$this->ipk=$atribute['ipk'];
    	}

    	if (isset($atribute['jurusan'])) {
    		# code...
    		$this->jurusan=$atribute['jurusan'];
    	}
    } 

}
