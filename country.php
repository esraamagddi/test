<?php
require "dbconn_2.php";


if ($_SERVER["REQUEST_METHOD"]=="GET")
{
    $uri=$_SERVER["REQUEST_URI"];
    $uriarray=explode("/",$uri);
    $id= end($uriarray);
    

    $query="SELECT * FROM country WHERE capital='$id'";

    $runquery=mysqli_query($conn,$query);

    if (mysqli_num_rows($runquery)>0)
    {
        $result=mysqli_fetch_assoc($runquery);

        $jsondata=json_encode($result);
    
        echo "<pre>";
        print_r($jsondata);
    
        echo"</pre>"; 
    }
    else
    {
        echo json_encode(["msg"=>"not found"]); 
    }

    
}
else
{
    http_response_code(404);
}
