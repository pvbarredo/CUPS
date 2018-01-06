<?php
namespace Pvbarredo\CUPS;

use Illuminate\Support\Facades\Facade; 

class CupsFacade extends Facade
{
    protected static function getFacadeAccessor() { return 'cups'; }

}