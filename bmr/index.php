<?php
$request = explode('/', trim($_SERVER['REQUEST_URI'],'bmr/index.php/'));
if(isset($request[0]) == true && isset($request[1]) == true && isset($request[2]) == true && isset($request[3]) == true)
{
    $height = $request[0]/100; // get height in centimeters and convert it to meters [1 m = 100 cm]
    $weight = $request[1]; //get weight in kgs
    $age = $request[2]; //get age in years
    $gender = $request[3]; //get gender [m - male / f - female] 
    $bmr = 0;

    if ($gender == 'f') 
    {
        $bmr  = 10 * $weight + 6.25 * $height - 5 * $age - 161 ;
        $gender = 'female';
    }
    else 
    {
        $bmr  = 10 * $weight + 6.25 * $height - 5 * $age + 5 ;
        $gender = 'male';
    }
    echo '"data":{ 
        "height" : '.($height*100).', 
        "weight" : '.$weight.',
        "age" : '.$age.',
        "gender" : '.$gender.', 
        "bmr" : '.$bmr.'
        }';
}
else
{
    echo '"data": {
        "error_code" : "001",
        "error" : "Input missing. Please check the documentation at https://urvipaithankar.github.io/calculator/bmr"
    }';
}
?>