<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premier_teble extends Model
{
   // use HasFactory;
    //id`, `nome`, `piece`, `photo`, `creat_at`, `updat_at
    protected $table='offers';
    protected $fillable=['name','piece','photo','creat_at','updat_at'];
    protected $hidden=['creat_at','updat_at'];

}
