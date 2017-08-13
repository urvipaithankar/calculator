<?php
echo "Helo bmi";
echo $_SERVER['REQUEST_URI'];
/*
$request = explode('/', trim($_SERVER['REQUEST_URI'],'bmi/index.php/'));
if(isset($request[0]) && isset($request[1]))
{
    $height = $request[0]/100; // get height in centimeters and convert it to meters [1 m = 100 cm]
    $weight = $request[1]; //get weight in kgs
    $bmi = $weight/($height*$height);
    echo '"data":{
    "height":'.$height*100.', 
    "weight":'.$weight.',
    "bmi":'.$bmi.'
    }';
}
else
{
    echo '"data": {
        "error_code" : "001",
        "error" : "Input missing. Please check the documentation at https://urvipaithankar.github.io/calculator/bmi"
    }';
}*/
?>