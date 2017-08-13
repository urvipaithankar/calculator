<?php
$request = explode('/', trim($_SERVER['REQUEST_URI'],'bmr/index.php/'));
if(isset($request[0]) == true && isset($request[1]) == true && isset($request[2]) == true)
{
    $height = trim($request[0]); // get height in centimeters
    $weight = trim($request[1]); //get weight in kgs
    $age = trim($request[2]); //get age in years
    
    if(isset($request[3])) 
        $gender = "female"; //get gender 
    else
        $gender = "male";

    $bmr  = 10 * $weight + 6.25 * $height - 5 * $age;

    if ($gender == "female") 
    {
        $bmr -= 161 ;
        $gender = "female";
        
    }
    else if($gender == "male")
    {
        $bmr  +=  5 ;
        $gender = "male";
       
    }
     echo '"data":{ 
        "height" : '.$height.', 
        "weight" : '.$weight.',
        "age" : '.$age.',
        "gender" : "'.$gender.'", 
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