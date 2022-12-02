<?php

include("config.php");
include("File.php");
include("index.php");

$date = jdate("Y/m/d");

$sql_check    = "SELECT `id` FROM `Permission` WHERE `time`=$date";
$result_check = mysqli_query($conn,$sql_check);
$res_check = mysqli_fetch_assoc($result_check);
$trsrul_check = $res_check['id'];

if(isset($trsrul_check)){
    
    mysqli_query($conn,"DELETE FROM `Permission` WHERE `id`='$trsrul_check' LIMIT 1");
    mysqli_query($conn,"UPDATE `users` SET `seo`='0' WHERE id='$trsrul_check' LIMIT 1");
    mysqli_query($conn,"UPDATE `users` SET `oprator`='0' WHERE id='$trsrul_check' LIMIT 1");
    
    bot('sendMessage',[
            'chat_id'=>$trsrul_check,
            'text'=>"🧭 زمان شما برای استفاده از ربات به پایان رسید لطفا اقدام به تمدید کنید",
            'parse_mode'=>"HTML",
            ]);
            
            
}
?>