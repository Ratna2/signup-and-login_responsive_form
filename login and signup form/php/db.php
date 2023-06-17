<?php

$conn = new mysqli('localhost','root','','userscreation');
if(!$conn){
    echo "connection Successfull!" . mysqli_connect_error();
}

?>