<?php

namespace Pvbarredo\CUPS;

class Cups 
{
	
	public static function getPrinters(){
    	$response = self::runShellCommand('lpstat -p');
    	$printers = [];

    	foreach( $response as $row ) 
		{
			preg_match( '/printer\s(.*)\is/', $row, $printer );
			preg_match( '/is\s(.*)\./', $row, $statusCode );
			if( end( $printer ) ) 
			{
				$printers[] = array( 'name' => end( $printer ), 'status' => end( $statusCode ) );
			}
		}
		return array( 'printers' => $printers );
    }


    public static function print(){
    	//you can change the printer name here if no env printer variable
    	$printerName = env('PRINTER', 'Epson_L800_config');
    	$fileName = '';
    	
    	self::runShellCommand('lpstat -p');

    	return 'Printing';
    }

    protected static function runShellCommand($command){

    	exec( escapeshellcmd( $command ), $output );

    	return $output;
    }

}