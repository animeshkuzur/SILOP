<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
	protected $ch1ON;
	protected $ch1OFF;
	protected $ch2ON;
	protected $ch2OFF;

	public function __construct(){
		$this->ch1ON = "\xc0\xa8\x01\x0d\x53\x4d\x41\x52\x54\x43\x4c\x4f\x55\x44\xaa\xaa\x0f\xbb\xbb\xcc\xc1\x00\x31\x01\x15\x01\x64\x00\x00\x48\xeb";
		$this->ch1OFF = "\xc0\xa8\x01\x0d\x53\x4d\x41\x52\x54\x43\x4c\x4f\x55\x44\xaa\xaa\x0f\xbb\xbb\xcc\xc1\x00\x31\x01\x15\x01\x00\x00\x00\x0f\x40";
		$this->ch2ON = "\xc0\xa8\x01\x0d\x53\x4d\x41\x52\x54\x43\x4c\x4f\x55\x44\xaa\xaa\x0f\xbb\xbb\xcc\xc1\x00\x31\x01\x15\x02\x64\x00\x00\xd3\x37";
		$this->ch2OFF = "\xc0\xa8\x01\x0d\x53\x4d\x41\x52\x54\x43\x4c\x4f\x55\x44\xaa\xaa\x0f\xbb\xbb\xcc\xc1\x00\x31\x01\x15\x02\x00\x00\x00\x94\x9c";
	}

    public function lock(){
    	error_reporting(~E_WARNING);
    	
    	$server = '192.168.1.1';
		$port = 6000;
		$sock = socket_create(AF_INET, SOCK_DGRAM, 0);
		socket_sendto($sock, $this->ch1OFF , strlen($this->ch1ON) , 0 , $server , $port);
		socket_sendto($sock, $this->ch2ON , strlen($this->ch1ON) , 0 , $server , $port);
		socket_close($sock);
		$input = 0;
    	return bin2hex($this->ch1ON[18]);
    }

    public function unlock(){
    	error_reporting(~E_WARNING);
    	
    	$server = '192.168.1.1';
		$port = 6000;
		$sock = socket_create(AF_INET, SOCK_DGRAM, 0);
		socket_sendto($sock, $this->ch1ON , strlen($this->ch1ON) , 0 , $server , $port);
		socket_sendto($sock, $this->ch2OFF , strlen($this->ch1ON) , 0 , $server , $port);
		socket_close($sock);
		$input = 0;
    	return bin2hex($this->ch1ON[18]);
    }

    
}
