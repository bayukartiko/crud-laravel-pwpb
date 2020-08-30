<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CRUD_model extends Model
{
    protected $table = 'students';
    protected $fillable = ['no_ppdb','nama','asal_sekolah','jurusan1','jurusan2','alamat','no_hp','email'];
}
