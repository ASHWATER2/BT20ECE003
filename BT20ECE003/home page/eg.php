<?php

class hello{
    public $str="hello world!";

    function show_hello(){
        return $this->str;
    }
}
$message=new hello;
var_dump($message);

$my_str='The quick brown fox jumps over the lazy dog.';
echo strlen($my_str);
echo str_word_count($my_str);
echo str_replace("quick","slow",$my_str);
echo strrev($my_str);

$c=array("lon","paris");
print_r($c);
var_dump($c);

echo "<br>";
$co=array("red","green","yellow","blue");
sort($co);
print_r($co);

rsort($co);
print_r($co);


echo"<br>";
$age=array("peter"=>20,"harry"=>14,"john"=>45,"clark"=>35);
ksort($age);
print_r($age);
krsort($age);
print_r($age);


echo date("d/m/Y")."<br>";
echo date("d-m-Y")."<br>";
echo date("d.m.Y");

echo "<br>";
$timestamp=time();
echo ($timestamp);

echo"<br>";
function custom($errno,$errstr){
    echo "<b>Error:</b>[$errno] $errstr";
}
set_error_handler("custom");
echo "$test";
?>