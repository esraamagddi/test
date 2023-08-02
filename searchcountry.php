<?php
require_once "dbconn_2.php";


if ($_SERVER["REQUEST_METHOD"]=="GET")
{
 $uri= $_SERVER["REQUEST_URI"];
 $uriarray=explode("/",$uri);
 $term= end($uriarray);

//  echo $term;

 $query="SELECT * FROM country WHERE name LIKE '%$term%' ";

 $runquery=mysqli_query($conn,$query);

 if (mysqli_num_rows($runquery)>0)
 {

 $searchresult=mysqli_fetch_all($runquery,MYSQLI_ASSOC);

 $jsondata=json_encode($searchresult);
 print_r($jsondata);
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