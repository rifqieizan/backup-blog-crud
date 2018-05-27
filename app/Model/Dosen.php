<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Dosen extends Model
{
    protected $table='dosen';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'jurusan', 'nilai',
    ];

}
