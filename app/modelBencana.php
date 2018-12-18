<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelBencana extends Model
{
    protected $table = 'bencanas';
    public $timestamps = false;
    protected $primaryKey = 'id_bencana';
}
