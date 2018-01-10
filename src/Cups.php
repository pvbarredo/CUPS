<?php

namespace Pvbarredo\CUPS;

class Cups 
{
	
	public static function getPrinters(){
    	$response = self::runShellCommand('lpstat -p');
    	$printers = [];

		foreach( $response as $row ) 
		{
        	preg_match( '/printer\s([^\s]+)/', $line, $printer );
        	preg_match( '/printer\s[^\s]+\s([^\.]+)/', $line, $status_code );
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

    	//sample file
    	$fileName = 'Voucher-4-1.pdf';
    	$filePath = storage_path('public\print\\' . $fileName);
    	
    	self::runShellCommand('lpr -P ' . $printerName . ' ' . $filePath);

    	return 'Printing';
    }

    protected static function runShellCommand($command){

    	exec( escapeshellcmd( $command ), $output );

    	return $output;
    }

}