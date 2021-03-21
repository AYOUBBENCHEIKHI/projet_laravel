<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as Basecontrller;

class Controller extends Basecontrller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function vie(){
        return view('welcome');
    }
}
