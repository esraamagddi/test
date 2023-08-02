<?php

require_once "dbconn_2.php";

header ("content-type:application/json; charset=UTF-8");
header ("access-control-allow-origin: *");
if ($_SERVER["REQUEST_METHOD"]=="GET")
{
    $query="SELECT * FROM country";

    $runquery=mysqli_query($conn,$query);
    
    $country=mysqli_fetch_all($runquery,MYSQLI_ASSOC);
    
    $jsondata=json_encode($country);
    
    print_r($jsondata);
}
else
{
    http_response_code(404);
}



