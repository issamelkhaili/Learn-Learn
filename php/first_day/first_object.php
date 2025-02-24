<?php
class morocco {
    public $city1;
    public $city2;
    public $city3;
    public $city4;
    public function __construct($city1,$city2,$city3,$city4)
    {
        $this->city1=$city1;
        $this->city2=$city2;
        $this->city3=$city3;
        $this->city4=$city4;
    }
}
    $cities = new morocco("tangier","merrakech","Rabat","Tetouan");
    echo $cities->city4;
?>
