<?php

function hello()
{
    echo "hello, world!";
}

hello();
echo PHP_EOL;
// ==============================
$current_user="mike";

function is_mike()
{
    global $current_user;


    if($current_user=="mike")
    {
        echo "you is mike \n";
    }else
    {
        echo "nope, you not mike";
    }
}
is_mike();
// ===============================
function helloname($name)
    
{
    if(is_array($name) && !empty($name))
    {
     foreach($name as $key)
     {
        echo "hello, $key \n";
     }
    }else
  {
    echo "hello friend!";
  }
}

helloname(["mike","kusuma","yuda"]);
// ===========================
echo PHP_EOL;

function get_info($name,$title=null)
{
    if($title)
    {
        echo "$name was arrived, and came as $title";
    }else
    {
        echo "$name was arrived, welcome";
    }
}
get_info("mike","frog");

echo PHP_EOL;
// =====================================
function hello_world($word)
{
    return "\n hello word $word";
}
$hello=hello_world($word="halo");
echo $hello;
// ====================================
echo PHP_EOL;
function addup($a,$b)
{
    return [$a,$b,$a+$b];//array
}
print_r(addup(2,4));
// =================================
echo PHP_EOL;

function sumarray($data)
{
    $result=0;
    foreach($data as $key)
    {
        $result+=$key;
    }
    return $result;
}
var_dump(sumarray([1,4,5,5]));
// ================================
echo PHP_EOL;
function  answer()
{
    echo "you answer the question";
}
$answer=answer();
echo PHP_EOL;
$answer_cal="answer";
echo $answer_cal()."!!"; //call the function
// ===============================
//anonymous function
$askname="what is your name?";
$name="budi";
echo PHP_EOL;
$ask=function()use($askname,$name)
{
    return "ask the question, $askname $name?";
};
echo $ask();
echo PHP_EOL;
// ==================================
// built-in string function
$magang="magang top jos";
echo strlen($magang);
echo substr($magang,7);//top jos
echo PHP_EOL;
echo substr($magang,7,6);//top jo
echo PHP_EOL;
echo strpos($magang,"jos");//11
echo PHP_EOL;
echo $magang[11];//j
echo PHP_EOL;
// ==================================
$team=["mike"=>"developer","chris"=>"designer","hompton"=>"manager"];
print_r(array_keys($team));
var_dump(array_key_exists("john",$team));

if(array_key_exists("chris",$team))
{
    echo "mike found in \$team";
}else
{
    echo "key not found in \$team";
}
echo PHP_EOL;
array_walk($team,function($value,$key){
    echo "$key is a $value \n";
});