<?php
class FileHandler {
    public $filehandle;
    public function __construct($filename)
    {
        $this->filehandle = fopen($filename,"r");
        if(!$this->filehandle)
            echo "failed";
    }
    public function readfile()
    {
        while(!feof($this->filehandle))
        {
            echo fgets($this->filehandle);
        }
    }
}
$letsdoit = new Filehandler("first_object.php");
$letsdoit->readfile();  // This is the fix! Use -> to call the method
?>
