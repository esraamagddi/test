<?php
require_once "dbconn_2.php";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    //كان ممكن اعمل print_r()ع طول 
    //لو استخدمت form-data
    // بس هنا قريت من row json
    //postman او html سواء input بيبعت اي حاجة تجيلي من 
    //print_r($data->code);
    $data= json_decode(file_get_contents("php://input"));
    $code=$data->code;
    $name=$data->name;
    $capital=$data->capital;
    $code2=$data->code2;

    // echo $code,$name,$capital,$code2;

    $query="INSERT INTO country (`code`,`name`,capital,`code2`) VALUES (`$code`,`$name`,$capital,`$code2`)";

    $runquery=mysqli_query($conn,$query);

    if ($runquery)
    {
       echo  json_encode(["msg"=>"added successfully"]);
    }
    else
    {
       echo json_encode(["msg"=>"failed to add"]);
    }





}



else
{
    http_response_code(404);
}