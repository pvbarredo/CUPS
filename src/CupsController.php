<?php

namespace Pvbarredo\CUPS;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CupsController extends Controller
{
    //
    public function getPrinters(){
    	return 'GET ALL PRINTERS';
    }

    public function getQueueJob(){
    	return 'QUEUE JOBS';
    }

    public function print(){
    	return 'PRINT';
    }
}