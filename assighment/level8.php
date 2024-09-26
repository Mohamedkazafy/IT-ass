<?php
$username = "Kazafy";
if(isset($username)){
    echo "Welcome $username" ."\n";
}
else{
    echo "Welcome Guest";
}

function check_color($color = "blue"){
    return $color;
}

echo check_color("yellow");