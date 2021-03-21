<?php

namespace App\Http\Controllers;

use App\Models\Premier_teble;
use Illuminate\Http\Request;

class AyoubController extends Controller
{
    public function tablebase(){
        return Premier_teble::get();
    }
}
