<?php

//-------------------------
// Dev : @DevMrAmir
// Channel : @AlaCode
//-------------------------

//------- Sql DataBase -------
$serverName = "localhost"; // ادیت نشود
$db_name    = "name"; // نام دیتابیس
$db_user    = "username"; // یوزر دیتابیس
$db_pass    = "password"; // پسورد دیتابیس

$conn = mysqli_connect($serverName, $db_user, $db_pass, $db_name);

if(!$conn){

    die('failed ' . mysqli_connect_error());
}
//------- Data -------
$token        = "Token"; // توکن ربات
$admin        = "544316811"; // عددی ادمین
$opratorC     = 1; // دست مزد هر سفارش برای اپراتور
$ok_c         = 1; // درامد مدیر تولید محتوا بر حسب دقیقه
$arshev       = "-1001864663281"; // ایدی عددی چنل ارشیو
$chanelGrafic = "-1001864663281"; // ایدی عددی چنل گرافیست ها
//------- Function -------
    
    function bot($method, $user = []){
        global $token;
    $url = "https://api.telegram.org/bot$token"."/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $user);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}

?>