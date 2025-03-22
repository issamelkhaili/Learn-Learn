<?php
class TestMagic {
    public function showAll() 
    {
        echo "1. Line Number: " . __LINE__ . "<br>";
        echo "2. File Path: " . __FILE__ . "<br>";
        echo "3. Directory Path: " . __DIR__ . "<br>";
        echo "4. Class Name: " . __CLASS__ . "<br>";
        echo "5. Method Name: " . __METHOD__ . "<br>";
        echo "6. Function Name: " . __FUNCTION__ . "<br>";
    }

    public function anotherTest() 
    {
        echo "Now I'm on line " . __LINE__ . "<br>";
        echo "In method: " . __METHOD__ . "<br>";
    }
}

$test = new TestMagic();

echo "First Function Call:<br>";
echo "-------------------<br>";
$test->showAll();

echo "<br>Second Function Call:<br>";
echo "-------------------<br>";
$test->anotherTest();
?>
