<?php

namespace Audizz\pevb-CUPS;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CupsController extends Controller
{
    //
    public function getPrinters(){
    	return 'GET ALL PRINTERS';
    }
}