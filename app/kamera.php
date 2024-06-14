<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamera extends Model
{
    protected $table = 'kamera';

    protected $fillable = [
                            'merk',
                            'jenis',
                            'foto',
                            'harga'
                          ];
}
