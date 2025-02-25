<?php
class Filehandler {
public $filehandle;
public function __construct($filename)
{
	$this->filehandle = fopen($filename,"r");
	if(!$this->filehandle)
		echo "\nhello world\n";
}

public function read()
{
	while(!feof($this->filehandle))
		echo fgets($this->filehandle);
}
	}
$letsdoit = new Filehandler("read.php");
$letsdoit->read();
?>
