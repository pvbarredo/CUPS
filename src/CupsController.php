<?php

namespace Pvbarredo\CUPS;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cups;

class CupsController extends Controller
{
    //
    public function getPrinters(){
    	return Cups::getPrinters();
    }

    public function getQueueJob(){
    	return 'QUEUE JOBS';
    }

    public function print(){
    	return Cups::print();
    }
}