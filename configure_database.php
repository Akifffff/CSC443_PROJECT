<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'csc443 project');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$result = mysqli_query($link, "select * from client");
while ($row = mysqli_fetch_array ($result)){
    foreach($row as $key =>$value){
        echo "$key = $value <br> \n";
    }
}
mysqli_free_result($result);
mysqli_close($link);
?>

