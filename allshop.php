<?php
require_once "dbconn_1.php";
header("content-type:application/json; charset=UTF-8");
header("access-control-allow-origin: *");

 if ($_SERVER["REQUEST_METHOD"]==="GET")
 {
    $query="SELECT * from emp"; 

    $runquery=mysqli_query($conn,$query);


    $result=mysqli_fetch_all($runquery,MYSQLI_ASSOC);

    $jsondata=json_encode($result);

    print_r($jsondata);


 }

 else
 {
  http_response_code(404);

 }
// echo"<pre>";

// print_r($_SERVER);

// echo"</pre>"





























?>