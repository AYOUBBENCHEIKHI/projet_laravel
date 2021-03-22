<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premier_teble extends Model
{
   // use HasFactory;
    //id`, `nome`, `piece`, `photo`, `created_at`, `updated_at
    protected $table='offers';
    protected $fillable=['nome','piece','photo','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps = false;

}
