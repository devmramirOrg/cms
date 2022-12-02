<?php


//-------------------------
// Dev : @DevMrAmir
// Channel : @AlaCode
//-------------------------

// ------- Sql Code -------
include("config.php");

mysqli_multi_query(
    $conn,
    "CREATE TABLE `users` (
        `id` bigint PRIMARY KEY,
        `step` varchar(20),
        `orders` bigint,
        `seo` bigint,
        `oprator` bigint,
        `GraphicDesigner` bigint
        ) default charset = utf8mb4;
        CREATE TABLE `orders` (
        `id` bigint PRIMARY KEY,
        `Manufacturer` bigint,
        `type` text,
        `date` varchar(20),
        `functor` bigint,
        `Condition` text
        ) default charset = utf8mb4;
        CREATE TABLE `SEOwork` (
        `id` bigint PRIMARY KEY,
        `jobdone` bigint,
        `coin` bigint,
        `Contentproducer` bigint,
        `dastmozd` bigint
        ) default charset = utf8mb4;
        CREATE TABLE `Contentproducer` (
        `id` bigint PRIMARY KEY,
        `jobdone` bigint,
        `coin` bigint,
        `sfarsh` bigint,
        `dastmozd` bigint
        ) default charset = utf8mb4;
        CREATE TABLE `GraphicDesigner` (
        `id` bigint PRIMARY KEY,
        `jobdone` bigint,
        `coin` bigint,
        `dastmozd` bigint,
        `temporary` bigint
        ) default charset = utf8mb4;
        CREATE TABLE `opator` (
        `id` bigint PRIMARY KEY,
        `jobdone` bigint,
        `coin` bigint,
        `dastmozd` bigint
        ) default charset = utf8mb4;
        CREATE TABLE `Permission` (
        `id` bigint PRIMARY KEY,
        `Permission` bigint,
        `number` bigint,
        `time` text,
        `numberG` bigint
        ) default charset = utf8mb4;
        CREATE TABLE `mazadKar` (
        `id` bigint PRIMARY KEY,
        `SeoWork` bigint,
        `number` bigint,
        `time` text,
        `result` text
        ) default charset = utf8mb4;
        ");
    if(mysqli_connect_errno()){
    echo "به دلیل مشکل زیر، اتصال برقرار نشد : <br />" . mysqli_connect_error();
    die();
}
echo "دیتابیس متصل و نصب شد .";

?>