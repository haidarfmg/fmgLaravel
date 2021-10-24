<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $table = 'peoples';
    protected $primaryKey = 'id';
    public function credit()
    {
        return $this->belongsTo(Credit::class,'credit_id','id');
    }

}
