<?php
for($i = -3; $i <= 2; $i++){
    if($i === 0){
        echo "This is a Zero". "\n";
    }
    elseif($i < 0){
        echo "This is a negative number". "\n";
    }
    else{
        echo "this is a postive" ."\n";
    }
}
$age = 15;

if ($age <= 12) {
    echo "Child";
} elseif ($age >= 13 && $age <= 19) {
    echo "Teenager";
} else {
    echo "Adult";
}

$password = "Password"; // Change this to test different cases

if (strlen($password) >= 8 && preg_match('/\d/', $password)) {
    echo "Password meets the criteria.";
} else {
    echo "Password does not meet the criteria.";
}

?>