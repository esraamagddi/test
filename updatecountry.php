<?php

require_once "dbconn_2.php";

if ($_SERVER["REQUEST_METHOD"]=="PUT")

{

    $uri=$_SERVER["REQUEST_URI"];

    $uriarray=explode("/",$uri);
    $id= end($uriarray);
    $data= json_decode(file_get_contents("php://input"));
    $code=$data->code;
    $name=$data->name;
    $capital=$data->capital;
    $code2=$data->code2;

    echo $code,$name,$capital,$code2,$id;

    $query=
    "UPDATE country SET `code`=$code,`name`=$name,capital=$capital,`code1`=$code2 WHERE capital=$id";



}

else
{

 http_response_code(404);

}