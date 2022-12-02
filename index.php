<?php

//-------------------------
// Dev : @DevMrAmir
// Channel : @AlaCode
//-------------------------

// ------- Telegram -------

$telegram_ip_ranges = [
    ['lower' => '149.154.160.0', 'upper' => '149.154.175.255'],
    ['lower' => '91.108.4.0',    'upper' => '91.108.7.255'],
    ];
    $ip_dec = (float) sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
    $ok=false;
    foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
    if(!$ok){
    $lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
    $upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
    if($ip_dec >= $lower_dec and $ip_dec <= $upper_dec){
    $ok=true;
    }}}
    if(!$ok){
    exit(header("location: https://coffemizban.com"));
    }

error_reporting(0);
// ------- include -------
include("config.php");
include("File.php");
$next = date('Y/m/d',strtotime('+30 day'));
$arshivTm = date('Y/m/d');
// ------- Telegram -------
$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
$chat_id = $update->message->chat->id;
$from_id = $update->message->from->id;
$text = $update->message->text;
$first = $update->message->from->first_name;
$message_id = $update->message->message_id;
$photo = $update->message->photo;
$captio = $update->message->caption;
$file_id = $photo[count($photo)-1]->file_id;
$file_id2 = $update->message->document->file_id;
}
if (isset($update->callback_query)){
$data              = $update->callback_query->data;
$callback_query_id = $update->callback_query->id;
$chat_id_inline    = $update->callback_query->message->chat->id;
}

// Anti Code
// if($chat_id != $admin){
//     if(strpos($text, 'zip') !== false or strpos($text, 'ZIP') !== false or strpos($text, 'Zip') !== false or strpos($text, 'ZIp') !== false or strpos($text, 'zIP') !== false or strpos($text, 'ZipArchive') !== false or strpos($text, 'ZiP') !== false){
//         bot('sendMessage',[
//             'chat_id'=>$chat_id,
//             'text'=>"❌ | از ارسال کد مخرب خودداری کنید",
//             'parse_mode'=>"HTML",
//             ]);
//         exit;
//         }
//         if(strpos($text, 'kajserver') !== false or strpos($text, 'update') !== false or strpos($text, 'UPDATE') !== false or strpos($text, 'Update') !== false or strpos($text, 'https://api') !== false){
//         bot('sendMessage',[
//             'chat_id'=>$chat_id,
//             'text'=>"❌ | از ارسال کد مخرب خودداری کنید",
//             'parse_mode'=>"HTML",
//             ]);
//         exit;
//         }
//         if(strpos($text, '$') !== false or strpos($text, '{') !== false or strpos($text, '}') !== false){
//         bot('sendMessage',[
//             'chat_id'=>$chat_id,
//             'text'=>"❌ | از ارسال کد مخرب خودداری کنید",
//             'parse_mode'=>"HTML",
//             ]);
//         exit;
//         }
//         if(strpos($text, '"') !== false or strpos($text, '(') !== false or strpos($text, '=') !== false){
//         bot('sendMessage',[
//             'chat_id'=>$chat_id,
//             'text'=>"❌ | از ارسال کد مخرب خودداری کنید",
//             'parse_mode'=>"HTML",
//             ]);
//         exit;
//         }
//         if(strpos($text, 'getme') !== false or strpos($text, 'GetMe') !== false){
//         bot('sendMessage',[
//             'chat_id'=>$chat_id,
//             'text'=>"❌ | از ارسال کد مخرب خودداری کنید",
//             'parse_mode'=>"HTML",
//             ]);
//         exit;
//         }
//     }

// ------- Start -------

        if($text == "/start"){
    
            $sql    = "SELECT `id` FROM `users` WHERE `id`=$chat_id";
            $result = mysqli_query($conn,$sql);
            
            $res = mysqli_fetch_assoc($result);
            
            if(!$res){
                
                $sql2    = "INSERT INTO `users` (id, step, orders, seo, oprator, GraphicDesigner) VALUES ($chat_id, 'none', 0, 0, 0, 0)";
                $result2 = mysqli_query($conn,$sql2);
            }
            }

if(isset($update->message)){
    
    bot('ForwardMessage',[
'chat_id'=>$arshev,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);

bot('sendMessage',[
                    'chat_id'=>$arshev,
                    'text'=>"ایدی عددی 👨‍💻 : $chat_id

تاریخ ⏰ : $arshivTm",
                    'parse_mode'=>"HTML",
                    ]);
}
// ------- KeyBoard -------

$key1        = '👨‍💻 | سفارش سئو سایت';
$key2        = '👨‍💻 | سفارش لوگو ( گرافیک )';
$key5        = '👨‍💻 | سفارش خدمات سایت';
$support     = '☎️ | پشتیبانی';
       
        $reply_keyboard = [
                            [$key1] ,
                            [$key2 , $key5] ,
                            [$support],
    
                          ];
     
$reply_kb_options = [
                                'keyboard'          => $reply_keyboard ,
                                'resize_keyboard'   => true ,
                                'one_time_keyboard' => false ,
                            ];

    $key4                 = '📊 | امار ربات';
    $key_hmgani           = '📝 | پیام همگانی'; 
    $key_forvard          = '📝 | فوروارد همگانی';
    $suppprt_result       = '✍️ | پیام به کاربر';
    $add_Grafist          = '👨‍💻 | استخدام گرافیست';
    $add_seo              = '👨‍💻 | استخدام سئو کار';
    $add_oprator          = '👨‍💻 | استخدام اپراتور';
    $add_Contentproducer  = '👨‍💻 استخدام کردن تولید کننده محتوا';
    $Customer             = '➕ | افزودن مشتری';
    $negative             = '💳 | صفر کردن درامد کارمند';
    $Followup             = '🔎 | پیگیری کارمند';
    $Ordertracking        = '🔎 | پیگیری سفارش';
    $akhraj               = '❌ اخراج کارمند';
    $akhraj_mem           = '❌ اخراج مشتری';
    
    $reply_keyboard_panel = [
                                    [$key4] ,
                                    [$key_hmgani, $key_forvard] ,
                                    [$suppprt_result] ,
                                    [$add_Grafist , $add_seo , $add_oprator],
                                    [$add_Contentproducer] ,
                                    [$Customer , $negative] ,
                                    [$Followup , $Ordertracking , $akhraj , $akhraj_mem] ,
                            
                            ];
                             
        $reply_kb_options_panel = [
                                        'keyboard'          => $reply_keyboard_panel ,
                                        'resize_keyboard'   => true ,
                                        'one_time_keyboard' => false ,
                                ];

    $back = '◀️ بازگشت';

    $reply_keyboard_back = [
                                [$back] ,
                                
                            ];
                                 
        $reply_kb_options_back = [
                                    'keyboard'          => $reply_keyboard_back ,
                                    'resize_keyboard'   => true ,
                                    'one_time_keyboard' => false ,
                                ];

    $backOrdertrackingSeo    = '🔎 | پیگیری سفارشات';
    $Workstatistics          = '📊 | امار کار های شما';
    $send_Contentproducer    = '📝 | ارسال برای تولید کننده محتوا';
    $mazadKar                = '🗂 ارائه پروژه خارج از برنامه کاری';


    $reply_keyboard_panel_seo = [
                                [$backOrdertrackingSeo] ,
                                [$Workstatistics] ,
                                [$send_Contentproducer , $mazadKar] ,
                                
                            ];
                                 
        $reply_kb_options_panel_seo = [
                                    'keyboard'          => $reply_keyboard_panel_seo ,
                                    'resize_keyboard'   => true ,
                                    'one_time_keyboard' => false ,
                                ];

    $backOrdertrackingGrafist       = '🔎 | پیگیری سفارش گرافیست';
    $WorkstatisticsGrafist          = '📊 | امار کار های گرافیست';



    $reply_keyboard_panel_grafist = [
                                [$backOrdertrackingGrafist , $WorkstatisticsGrafist] ,
                                
                            ];
                                 
        $reply_kb_options_panel_grafist = [
                                    'keyboard'          => $reply_keyboard_panel_grafist ,
                                    'resize_keyboard'   => true ,
                                    'one_time_keyboard' => false ,
                                ];

    $backOrdertrackingOprator    = '🔎 | پیگیری سفارش اپراتور';
    $WorkstatisticsOprator       = '📊 | امار کار های اپراتور';



    $reply_keyboard_panel_oprator = [
                                [$backOrdertrackingOprator , $WorkstatisticsOprator] ,
                                
                            ];
                                 
        $reply_kb_options_panel_oprator = [
                                    'keyboard'          => $reply_keyboard_panel_oprator ,
                                    'resize_keyboard'   => true ,
                                    'one_time_keyboard' => false ,
                                ];

    $backOrdertrackingContentproducer    = '🔎 | پیگیری سفارش تولید کننده محتوا';
    $WorkstatisticsContentproducer       = '📊 | امار کار های تولید کننده محتوا';



    $reply_keyboard_panel_Contentproducer = [
                                [$backOrdertrackingContentproducer , $WorkstatisticsContentproducer] ,
                                
                            ];
                                 
        $reply_kb_options_panel_Contentproducer = [
                                    'keyboard'          => $reply_keyboard_panel_Contentproducer ,
                                    'resize_keyboard'   => true ,
                                    'one_time_keyboard' => false ,
                                ];

$finish = '✅ اتمام عملیات ارسال عکس';

    $reply_keyboard_finish = [
                                [$finish] ,
                                
                            ];
                                 
        $reply_kb_options_finish = [
                                    'keyboard'          => $reply_keyboard_finish ,
                                    'resize_keyboard'   => true ,
                                    'one_time_keyboard' => false ,
                                ];
                                
    $backOrdertrackinggra    = '🔎 | پیگیری سفارش گرافیست';
    $Workstatisticsgra       = '📊 | امار کار های گرافیست';



    $reply_keyboard_panel_gra = [
                                [$backOrdertrackinggra , $Workstatisticsgra] ,
                                
                            ];
                                 
        $reply_kb_options_panel_gra = [
                                    'keyboard'          => $reply_keyboard_panel_gra ,
                                    'resize_keyboard'   => true ,
                                    'one_time_keyboard' => false ,
                                ];
                                
$finish_G = '✅ اتمام عملیات';

$reply_keyboard_finish_G = [
                                [$finish_G] ,
                                
                            ];
                                 
$reply_kb_options_finish_G = [
                                    'keyboard'          => $reply_keyboard_finish_G ,
                                    'resize_keyboard'   => true ,
                                    'one_time_keyboard' => false ,
                                ];
// ------- IF -------

if($text == "/panel1"){

    $sql_Seo    = "SELECT `id` FROM `SEOwork` WHERE `id`=$chat_id";
            $result_Seo = mysqli_query($conn,$sql_Seo);
            
            $res_Seo = mysqli_fetch_assoc($result_Seo);

            if($chat_id == $res_Seo['id']){
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"👨‍💻 سلام سئو کار عزیز به پنل خود خوش امدید",
                    'parse_mode'=>"HTML",
                    'reply_markup'=>json_encode($reply_kb_options_panel_seo),
                    ]);
            }}
if($text == "/panel2"){
            $sql_Oprator    = "SELECT `id` FROM `opator` WHERE `id`=$chat_id";
            $result_Oprator = mysqli_query($conn,$sql_Oprator);
            
            $res_Oprator = mysqli_fetch_assoc($result_Oprator);

            if($chat_id == $res_Oprator['id']){

                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"👨‍💻 سلام اپراتور عزیز به پنل خود خوش امدید",
                    'parse_mode'=>"HTML",
                    'reply_markup'=>json_encode($reply_kb_options_panel_oprator),
                    ]);
            }}
if($text == "/panel3"){
            $sql_grafist    = "SELECT `id` FROM `GraphicDesigner` WHERE `id`=$chat_id";
            $result_grafist = mysqli_query($conn,$sql_grafist);
            
            $res_grafist = mysqli_fetch_assoc($result_grafist);

            if($chat_id == $res_grafist['id']){

                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"👨‍💻 سلام گرافیست عزیز به پنل خود خوش امدید",
                    'parse_mode'=>"HTML",
                    'reply_markup'=>json_encode($reply_kb_options_panel_grafist),
                    ]);
            }}
if($text == "/panel4"){
            $sql_Contentproducer    = "SELECT `id` FROM `Contentproducer` WHERE `id`=$chat_id";
            $result_Contentproducer = mysqli_query($conn,$sql_Contentproducer);
            
            $res_Contentproducer = mysqli_fetch_assoc($result_Contentproducer);

            if($chat_id == $res_Contentproducer['id']){

                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"👨‍💻 سلام تولید کننده محتوای عزیز به پنل خود خوش امدید",
                    'parse_mode'=>"HTML",
                    'reply_markup'=>json_encode($reply_kb_options_panel_Contentproducer),
                    ]);
            }}

// ------- If ------- 
$adminstep = mysqli_fetch_assoc(mysqli_query($conn,"SELECT `step` FROM `users` WHERE `id`='$from_id' LIMIT 1"));

if ($data == "seo"){

bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='seo' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}

if($adminstep['step'] == "seo" and $text != $back){
    
    $sql    = "SELECT `id` FROM `SEOwork` WHERE `id`=$text";
    $result = mysqli_query($conn,$sql);
    $res = mysqli_fetch_assoc($result);
    $trsrul = $res['id'];
    
    if(isset($trsrul)){
        
    $sql_jobdone    = "SELECT `jobdone` FROM `SEOwork` WHERE `id`=$text";
    $result_jobdone = mysqli_query($conn,$sql_jobdone);
    $res_jobdone = mysqli_fetch_assoc($result_jobdone);
    $trsrul_jobdone = $res_jobdone['jobdone'];
    
    $sql_coin    = "SELECT `coin` FROM `SEOwork` WHERE `id`=$text";
    $result_coin = mysqli_query($conn,$sql_coin);
    $res_coin = mysqli_fetch_assoc($result_coin);
    $trsrul_coin = $res_coin['coin'];
    
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 حساب شما :",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👨‍💻 پروژه های انجام شده",'callback_data'=>"aaaa"],
    ['text'=>"$trsrul_jobdone",'callback_data'=>"aaaa"],
],
[
    ['text'=>"💳 موجودی",'callback_data'=>"aaaa"],
    ['text'=>"$trsrul_coin",'callback_data'=>"aaaa"],
],
]
])
]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ جستجو انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$admin' LIMIT 1");
}
    else{
        
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ کارمندی با همچین ایدی عددی وجود ندارد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$admin' LIMIT 1");
    }
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$admin' LIMIT 1");
}

if ($data == "grafic"){

bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='grafic' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}

if($adminstep['step'] == "grafic" and $text != $back){
    
    $sql    = "SELECT `id` FROM `GraphicDesigner` WHERE `id`=$text";
    $result = mysqli_query($conn,$sql);
    $res = mysqli_fetch_assoc($result);
    $trsrul = $res['id'];
    
    if(isset($trsrul)){
        
    $sql_jobdone    = "SELECT `jobdone` FROM `GraphicDesigner` WHERE `id`=$text";
    $result_jobdone = mysqli_query($conn,$sql_jobdone);
    $res_jobdone = mysqli_fetch_assoc($result_jobdone);
    $trsrul_jobdone = $res_jobdone['jobdone'];
    
    $sql_coin    = "SELECT `coin` FROM `GraphicDesigner` WHERE `id`=$text";
    $result_coin = mysqli_query($conn,$sql_coin);
    $res_coin = mysqli_fetch_assoc($result_coin);
    $trsrul_coin = $res_coin['coin'];
    
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 حساب شما :",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👨‍💻 پروژه های انجام شده",'callback_data'=>"aaaa"],
    ['text'=>"$trsrul_jobdone",'callback_data'=>"aaaa"],
],
[
    ['text'=>"💳 موجودی",'callback_data'=>"aaaa"],
    ['text'=>"$trsrul_coin",'callback_data'=>"aaaa"],
],
]
])
]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ جستجو انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$admin' LIMIT 1");
}
    else{
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ کارمندی با همچین ایدی عددی وجود ندارد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
    }
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$admin' LIMIT 1");
}
if ($data == "oprator"){


bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='oprator' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}
if($adminstep['step'] == "oprator" and $text != $back){
    
    $sql    = "SELECT `id` FROM `opator` WHERE `id`=$text";
    $result = mysqli_query($conn,$sql);
    $res = mysqli_fetch_assoc($result);
    $trsrul = $res['id'];
    
    if(isset($trsrul)){
        
    $sql_jobdone    = "SELECT `jobdone` FROM `opator` WHERE `id`=$text";
    $result_jobdone = mysqli_query($conn,$sql_jobdone);
    $res_jobdone = mysqli_fetch_assoc($result_jobdone);
    $trsrul_jobdone = $res_jobdone['jobdone'];
    
    $sql_coin    = "SELECT `coin` FROM `opator` WHERE `id`=$text";
    $result_coin = mysqli_query($conn,$sql_coin);
    $res_coin = mysqli_fetch_assoc($result_coin);
    $trsrul_coin = $res_coin['coin'];
    
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 حساب شما :",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👨‍💻 پروژه های انجام شده",'callback_data'=>"aaaa"],
    ['text'=>"$trsrul_jobdone",'callback_data'=>"aaaa"],
],
[
    ['text'=>"💳 موجودی",'callback_data'=>"aaaa"],
    ['text'=>"$trsrul_coin",'callback_data'=>"aaaa"],
],
]
])
]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ جستجو انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$admin' LIMIT 1");
}
    else{
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ کارمندی با همچین ایدی عددی وجود ندارد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
    }
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$admin' LIMIT 1");
}
if ($data == "media"){


bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='media' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}
if($adminstep['step'] == "media" and $text != $back){
    
    $sql    = "SELECT `id` FROM `Contentproducer` WHERE `id`=$text";
    $result = mysqli_query($conn,$sql);
    $res = mysqli_fetch_assoc($result);
    $trsrul = $res['id'];
    
    if(isset($trsrul)){
        
    $sql_jobdone    = "SELECT `jobdone` FROM `Contentproducer` WHERE `id`=$text";
    $result_jobdone = mysqli_query($conn,$sql_jobdone);
    $res_jobdone = mysqli_fetch_assoc($result_jobdone);
    $trsrul_jobdone = $res_jobdone['jobdone'];
    
    $sql_coin    = "SELECT `coin` FROM `Contentproducer` WHERE `id`=$text";
    $result_coin = mysqli_query($conn,$sql_coin);
    $res_coin = mysqli_fetch_assoc($result_coin);
    $trsrul_coin = $res_coin['coin'];
    
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 حساب شما :",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👨‍💻 پروژه های انجام شده",'callback_data'=>"aaaa"],
    ['text'=>"$trsrul_jobdone",'callback_data'=>"aaaa"],
],
[
    ['text'=>"💳 موجودی",'callback_data'=>"aaaa"],
    ['text'=>"$trsrul_coin",'callback_data'=>"aaaa"],
],
]
])
]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ جستجو انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$admin' LIMIT 1");
}
    else{
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ کارمندی با همچین ایدی عددی وجود ندارد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
    }
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$admin' LIMIT 1");
}
if($adminstep['step'] == "key_forvard" and $text != $back){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$admin' LIMIT 1");
 
$sql    = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);
 
 while($row = mysqli_fetch_assoc($result)){
        
    bot('ForwardMessage',[
'chat_id'=>$row['id'],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
    }
 
    bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if($adminstep['step'] == "key_hmgani" and $text != $back){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE `id`=$chat_id LIMIT 1");
    
$sql    = "SELECT `id` FROM `users`";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
        
    bot('sendMessage',[
'chat_id'=>$row['id'],
'text'=>"$text",
'parse_mode'=>"HTML",
]);
}
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if($adminstep['step'] == "suppprt_result" and $text != $back){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
    $text_admin = explode(",",$text);
    $user_id = $text_admin['0'];
    $text_admin = $text_admin['1'];
    
    
    bot('sendmessage',[
'chat_id'=>$user_id,
'text'=>"👨‍💻 یک پیام از طرف مدیریت براتون امد 

📝 : $text_admin",
]);

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if($adminstep['step'] == "add_Con" and $text != $back){
    
    $text_admin = explode(",",$text);
    $user_id = $text_admin['0'];
    $dastmozd = $text_admin['1'];

    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");

    $sql    = "INSERT INTO `Contentproducer` (`id`, `jobdone`, `coin`, `sfarsh`, `dastmozd`) VALUES ($user_id, 0, 0, 0, $dastmozd)";
    $result = mysqli_query($conn,$sql);

    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ انجام شد",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
        exit();
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if($adminstep['step'] == "Customer" and $text != $back){
    
    $text_admin = explode(",",$text);
    $user_id = $text_admin['0'];
    $text_admin2 = $text_admin['1'];
    
    if($text_admin2 == 1){
        
        $sql2    = "INSERT INTO `Permission` (id, Permission, number, time) VALUES ($user_id, $text_admin2, 0, '$next')";
        $result2 = mysqli_query($conn,$sql2);
        
        mysqli_query($conn,"UPDATE `users` SET `step`='Customer2' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤 تعداد سفارش سئو و ایدی عددی سئوکار این شخص را به صورت زیر وارد کنید
id,number,seo

id : ایدی عددی شخص
number : تعداد کار
seo : عددی سئو کار",
        'parse_mode'=>"HTML",
        ]);
        exit();
    }
    if($text_admin2 == 2){
        
        mysqli_query($conn,"UPDATE `users` SET `step`='number2' WHERE id='$chat_id' LIMIT 1");
        
        $sql2    = "INSERT INTO `Permission` (id, Permission, number, time) VALUES ($user_id, $text_admin2, 0, '$next')";
        $result2 = mysqli_query($conn,$sql2);
        
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤 ایدی عددی مشتری و ایدی عددی اپراتور را وارد کنید
id,oprator

id : ایدی عددی شخص
oprator : عددی اپراتور",
        'parse_mode'=>"HTML",
        ]);
        exit();
    }
    if($text_admin2 == 3){
        
         mysqli_query($conn,"UPDATE `users` SET `step`='graficMem' WHERE id='$chat_id' LIMIT 1");
        
        
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤 ایدی عددی مشتری و ایدی عددی گرافبست مخصوص مشتری را وارد کنید
id,grafict,number

id : ایدی عددی شخص
grafict : عددی گرافیست
number : تعداد سفارش",
        'parse_mode'=>"HTML",
        ]);
        exit();
    }
    if($text_admin2 == 4){
        
        mysqli_query($conn,"UPDATE `users` SET `step`='AddAllAc' WHERE id='$chat_id' LIMIT 1");
        
        
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤 ایدی عددی مشتری و ایدی عددی گرافیست . سئو کار . اپراتور . تعداد سفارش گرافیست و سئو را به صورت زیر بنویسید

id,grafict,seo,oprator,graficNum,seoNumber

id : ایدی عددی شخص
grafict : عددی گرافیست
seo : ایدی عددی سئو کار
oprator : ایدی عددی اپراتور
graficNum : تعداد سفارش گرافیست
seoNumber : تعداد سفارش سئو",
        'parse_mode'=>"HTML",
        ]);
        exit();
    }
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
if($adminstep['step'] == "Customer2" and $text != $back){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
    $text_admin = explode(",",$text);
    $user_id = $text_admin['0'];
    $text_admin2 = $text_admin['1'];
    $seokar = $text_admin['2'];
    
    mysqli_query($conn,"UPDATE `Permission` SET `number`=$text_admin2 WHERE id='$user_id' LIMIT 1");
    mysqli_query($conn,"UPDATE `users` SET `seo`=$seokar WHERE id='$user_id' LIMIT 1");
    
    $sql44    = "SELECT `time` FROM `Permission` WHERE `id`=$user_id";
    $result44 = mysqli_query($conn,$sql44);
    $res44 = mysqli_fetch_assoc($result44);
    $trsrul44 = $res44['time'];
    
    $sql22    = "SELECT `number` FROM `Permission` WHERE `id`=$user_id";
    $result22 = mysqli_query($conn,$sql22);
    $res22 = mysqli_fetch_assoc($result22);
    $trsrul22 = $res22['number'];
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$user_id,
'text'=>"👤 مشتری گرامی حساب شما برای سفارش خدمات سئو موفقیت تایید شد

📊 تعداد ارسال درخاست سفارش : $trsrul22
🧭 تاریخ انقضا : $next",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options),
]);
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
if($adminstep['step'] == "number3" and $text != $back){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
    $text_admin = explode(",",$text);
    $user_id = $text_admin['0'];
    $text_admin2 = $text_admin['1'];
    $seokar = $text_admin['2'];
    $oprator = $text_admin['3'];
    
    mysqli_query($conn,"UPDATE `Permission` SET `number`=$text_admin2 WHERE id='$user_id' LIMIT 1");
    mysqli_query($conn,"UPDATE `users` SET `seo`=$seokar WHERE id='$user_id' LIMIT 1");
    mysqli_query($conn,"UPDATE `users` SET `oprator`=$oprator WHERE id='$user_id' LIMIT 1");
    
    $sql44    = "SELECT `time` FROM `Permission` WHERE `id`=$user_id";
    $result44 = mysqli_query($conn,$sql44);
    $res44 = mysqli_fetch_assoc($result44);
    $trsrul44 = $res44['time'];
    
    $sql22    = "SELECT `number` FROM `Permission` WHERE `id`=$user_id";
    $result22 = mysqli_query($conn,$sql22);
    $res22 = mysqli_fetch_assoc($result22);
    $trsrul22 = $res22['number'];
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$user_id,
'text'=>"👤 مشتری گرامی حساب شما برای سفارش خدمات سئو موفقیت تایید شد

📊 تعداد ارسال درخاست سفارش : $trsrul22
🧭 تاریخ انقضا : $next",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options),
]);
}
if($adminstep['step'] == "support" and $text != $back){
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ پیام با موفقیت ارسال شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options),
]);

bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"👨‍💻 سلام ادمین یک پیام برات امده 

📝 متن پیام : $text
👤 ارسال کننده : $chat_id",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
if($adminstep['step'] == "add_Grafist" and $text != $back){
    
    $text_admin = explode(",",$text);
    $user_id = $text_admin['0'];
    $text_admin2 = $text_admin['1'];
    
    $sql2    = "INSERT INTO `GraphicDesigner` (id, jobdone, coin, dastmozd, temporary) VALUES ($user_id, 0, 0, $text_admin2, 0)";
    $result2 = mysqli_query($conn,$sql2);
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$user_id,
'text'=>"🎊 کاربر گرامی شما به عنوان گرافیست استخدام شدید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel_grafist),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if($adminstep['step'] == "add_seo" and $text != $back){
    
    $text_admin = explode(",",$text);
    $user_id = $text_admin['0'];
    $text_admin2 = $text_admin['1'];
    $dastmozd = $text_admin['2'];
    
    $sql245    = "INSERT INTO `SEOwork` (id, jobdone, coin, Contentproducer, dastmozd) VALUES ($user_id, '0', '0' , $text_admin2, $dastmozd)";
    $result2 = mysqli_query($conn,$sql245);
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$user_id,
'text'=>"🎊 کاربر گرامی شما به عنوان سئو کار استخدام شدید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel_seo),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if($adminstep['step'] == "add_oprator" and $text != $back){
    
    $text_admin = explode(",",$text);
    $user_id = $text_admin['0'];
    $dastmozd = $text_admin['1'];
    
    $sql245    = "INSERT INTO `opator` (id, jobdone, coin, dastmozd) VALUES ($user_id, '0', '0', $dastmozd)";
    $result2 = mysqli_query($conn,$sql245);
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$user_id,
'text'=>"🎊 کاربر گرامی شما به عنوان اپراتور استخدام شدید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel_oprator),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if($adminstep['step'] == "Ordertracking" and $text != $back){
    
$sql_Ordertracking         = "SELECT `id` FROM `orders` WHERE `id`=$text";
$result_user_Ordertracking = mysqli_query($conn,$sql_Ordertracking);
            
$res_user_Ordertracking    = mysqli_fetch_assoc($result_user_Ordertracking);

if(isset($res_user_Ordertracking)){
    
$sql_Manufacturer         = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$text";
$result_Manufacturer = mysqli_query($conn,$sql_Manufacturer);
            
$res_Manufacturer    = mysqli_fetch_assoc($result_Manufacturer);
$res_ma = $res_Manufacturer['Manufacturer'];

$sql_type         = "SELECT `type` FROM `orders` WHERE `id`=$text";
$result_type = mysqli_query($conn,$sql_type);
            
$res_type    = mysqli_fetch_assoc($result_type);
$res_ty = $res_type['type'];

$sql_date         = "SELECT `date` FROM `orders` WHERE `id`=$text";
$result_date = mysqli_query($conn,$sql_date);
            
$res_date    = mysqli_fetch_assoc($result_date);
$res_da = $res_date['date'];

$sql_functor         = "SELECT `functor` FROM `orders` WHERE `id`=$text";
$result_functor = mysqli_query($conn,$sql_functor);
            
$res_functor    = mysqli_fetch_assoc($result_functor);
$res_fu = $res_functor['functor'];

$sql_Condition         = "SELECT `Condition` FROM `orders` WHERE `id`=$text";
$result_Condition = mysqli_query($conn,$sql_Condition);
            
$res_Condition    = mysqli_fetch_assoc($result_Condition);
$res_co = $res_Condition['Condition'];

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 امار ربات شما",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👤 ارسال کننده سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_ma",'callback_data'=>"ssss"],
],
[
    ['text'=>"🖥 نوع سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_ty",'callback_data'=>"ssss"],
],
[
    ['text'=>"⌛️ تاریخ سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_da",'callback_data'=>"ssss"],
],
[
    ['text'=>"👤 انجام دهنده سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_fu",'callback_data'=>"ssss"],
],
[
    ['text'=>"📱 وضعیت سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_co",'callback_data'=>"ssss"],
],
]
])
]);

bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ جستجو انجام شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
else{
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ همچین سفارشی با این کد پیگیری وجود ندارد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
}

if ($data == "seoManfi"){

mysqli_query($conn,"UPDATE `users` SET `step`='seoManfi' WHERE id='$chat_id_inline' LIMIT 1");

bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

}
if($adminstep['step'] == "seoManfi" and $text != $back){
    
$sql_seoManfi         = "SELECT `id` FROM `SEOwork` WHERE `id`=$text";
$result_seoManfi = mysqli_query($conn,$sql_seoManfi);
            
$res_seoManfi    = mysqli_fetch_assoc($result_seoManfi);

if(isset($res_seoManfi)){
    
    mysqli_query($conn,"UPDATE `SEOwork` SET `coin`='0' WHERE id='$text' LIMIT 1");
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ انجام شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
        
        bot('sendMessage',[
        'chat_id'=>$text,
        'text'=>"👤 کارمند گرامی موجودی شما از طرف مدیریت صفر شد",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
else{
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ کارمندی با همچین ایدی عددی وجود ندارد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
}
}

if ($data == "graficManfi"){

mysqli_query($conn,"UPDATE `users` SET `step`='graficManfi' WHERE id='$chat_id_inline' LIMIT 1");

bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

}

if($adminstep['step'] == "graficManfi" and $text != $back){
    
$sql_seoManfi         = "SELECT `id` FROM `GraphicDesigner` WHERE `id`=$text";
$result_seoManfi = mysqli_query($conn,$sql_seoManfi);
            
$res_seoManfi    = mysqli_fetch_assoc($result_seoManfi);

if(isset($res_seoManfi)){
    
    mysqli_query($conn,"UPDATE `GraphicDesigner` SET `coin`='0' WHERE id='$text' LIMIT 1");
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ انجام شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
        
        bot('sendMessage',[
        'chat_id'=>$text,
        'text'=>"👤 کارمند گرامی موجودی شما از طرف مدیریت صفر شد",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
else{
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ کارمندی با همچین ایدی عددی وجود ندارد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
}
}

if ($data == "OpratorManfi"){

mysqli_query($conn,"UPDATE `users` SET `step`='OpratorManfi' WHERE id='$chat_id_inline' LIMIT 1");

bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

}

if($adminstep['step'] == "OpratorManfi" and $text != $back){
    
$sql_seoManfi         = "SELECT `id` FROM `opator` WHERE `id`=$text";
$result_seoManfi = mysqli_query($conn,$sql_seoManfi);
            
$res_seoManfi    = mysqli_fetch_assoc($result_seoManfi);

if(isset($res_seoManfi)){
    
    mysqli_query($conn,"UPDATE `opator` SET `coin`='0' WHERE id='$text' LIMIT 1");
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ انجام شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
        
        bot('sendMessage',[
        'chat_id'=>$text,
        'text'=>"👤 کارمند گرامی موجودی شما از طرف مدیریت صفر شد",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
else{
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ کارمندی با همچین ایدی عددی وجود ندارد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
}
}

if ($data == "mediaManfi"){

mysqli_query($conn,"UPDATE `users` SET `step`='mediaManfi' WHERE id='$chat_id_inline' LIMIT 1");

bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

}

if($adminstep['step'] == "mediaManfi" and $text != $back){
    
$sql_seoManfi         = "SELECT `id` FROM `Contentproducer` WHERE `id`=$text";
$result_seoManfi = mysqli_query($conn,$sql_seoManfi);
            
$res_seoManfi    = mysqli_fetch_assoc($result_seoManfi);

if(isset($res_seoManfi)){
    
    mysqli_query($conn,"UPDATE `Contentproducer` SET `coin`='0' WHERE id='$text' LIMIT 1");
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ انجام شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
        
        bot('sendMessage',[
        'chat_id'=>$text,
        'text'=>"👤 کارمند گرامی موجودی شما از طرف مدیریت صفر شد",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
else{
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ کارمندی با همچین ایدی عددی وجود ندارد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_panel),
        ]);
}
}

if($adminstep['step'] == "shopSeo"){
    

$sql_seok1         = "SELECT `seo` FROM `users` WHERE `id`=$chat_id";
$result_seok1 = mysqli_query($conn,$sql_seok1);
$res_seok1    = mysqli_fetch_assoc($result_seok1);
$res_se1 = $res_seok1['seo'];

        
bot('sendphoto',[
    'photo'=>"$file_id",
    'chat_id'=>$res_se1,
    'caption'=>"✅ #سفارش جدید

🖼 عکس های کارفرما برای انجام پروژه سئو

👨‍💻 ارسال کننده : $chat_id

📄 متن کپشن عکس : $captio",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='shopSeo' WHERE id='$chat_id' LIMIT 1");

}
if($adminstep['step'] == "backOrde"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
$sql_user    = "SELECT `id` FROM `orders` WHERE `id`=$text";
$result_user = mysqli_query($conn,$sql_user);
            
$res_user = mysqli_fetch_assoc($result_user);

$res_us = $res_user['id'];

$sql_user1    = "SELECT `functor` FROM `orders` WHERE `id`=$text";
$result_user1 = mysqli_query($conn,$sql_user1);
            
$res_user1 = mysqli_fetch_assoc($result_user1);

$res_us1 = $res_user1['functor'];

    if(isset($res_us)){
        
        if($res_us1 == $chat_id){
            
$sql_Manufacturer         = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$text";
$result_Manufacturer = mysqli_query($conn,$sql_Manufacturer);
            
$res_Manufacturer    = mysqli_fetch_assoc($result_Manufacturer);
$res_ma = $res_Manufacturer['Manufacturer'];

$sql_type         = "SELECT `type` FROM `orders` WHERE `id`=$text";
$result_type = mysqli_query($conn,$sql_type);
            
$res_type    = mysqli_fetch_assoc($result_type);
$res_ty = $res_type['type'];

$sql_date         = "SELECT `date` FROM `orders` WHERE `id`=$text";
$result_date = mysqli_query($conn,$sql_date);
            
$res_date    = mysqli_fetch_assoc($result_date);
$res_da = $res_date['date'];

$sql_functor         = "SELECT `functor` FROM `orders` WHERE `id`=$text";
$result_functor = mysqli_query($conn,$sql_functor);
            
$res_functor    = mysqli_fetch_assoc($result_functor);
$res_fu = $res_functor['functor'];

$sql_Condition         = "SELECT `Condition` FROM `orders` WHERE `id`=$text";
$result_Condition = mysqli_query($conn,$sql_Condition);
            
$res_Condition    = mysqli_fetch_assoc($result_Condition);
$res_co = $res_Condition['Condition'];

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 امار سفارش شما",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👤 ارسال کننده سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_ma",'callback_data'=>"ssss"],
],
[
    ['text'=>"🖥 نوع سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_ty",'callback_data'=>"ssss"],
],
[
    ['text'=>"⌛️ تاریخ سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_da",'callback_data'=>"ssss"],
],
[
    ['text'=>"👤 انجام دهنده سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_fu",'callback_data'=>"ssss"],
],
[
    ['text'=>"📱 وضعیت سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_co",'callback_data'=>"ssss"],
],
]
])
]);

bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ جستجو انجام شد",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
        }
        else{
            bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ این سفارش برای کارمند دیگه ای هست شما نمیتوانید پیگیری کنید این سفارش را",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
        exit();
        }
    }
    else{
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ سفارشی با این کد پیگیری وجود ندارد",
        'parse_mode'=>"HTML",
        ]);
    }
}

if($adminstep['step'] == "backOrdertrackingGrafist"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
$sql_user    = "SELECT `id` FROM `orders` WHERE `id`=$text";
$result_user = mysqli_query($conn,$sql_user);
            
$res_user = mysqli_fetch_assoc($result_user);

$res_us = $res_user['id'];

$sql_user1    = "SELECT `functor` FROM `orders` WHERE `id`=$text";
$result_user1 = mysqli_query($conn,$sql_user1);
            
$res_user1 = mysqli_fetch_assoc($result_user1);

$res_us1 = $res_user1['functor'];

    if(isset($res_us)){
        
        if($res_us1 == $chat_id){
            
$sql_Manufacturer         = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$text";
$result_Manufacturer = mysqli_query($conn,$sql_Manufacturer);
            
$res_Manufacturer    = mysqli_fetch_assoc($result_Manufacturer);
$res_ma = $res_Manufacturer['Manufacturer'];

$sql_type         = "SELECT `type` FROM `orders` WHERE `id`=$text";
$result_type = mysqli_query($conn,$sql_type);
            
$res_type    = mysqli_fetch_assoc($result_type);
$res_ty = $res_type['type'];

$sql_date         = "SELECT `date` FROM `orders` WHERE `id`=$text";
$result_date = mysqli_query($conn,$sql_date);
            
$res_date    = mysqli_fetch_assoc($result_date);
$res_da = $res_date['date'];

$sql_functor         = "SELECT `functor` FROM `orders` WHERE `id`=$text";
$result_functor = mysqli_query($conn,$sql_functor);
            
$res_functor    = mysqli_fetch_assoc($result_functor);
$res_fu = $res_functor['functor'];

$sql_Condition         = "SELECT `Condition` FROM `orders` WHERE `id`=$text";
$result_Condition = mysqli_query($conn,$sql_Condition);
            
$res_Condition    = mysqli_fetch_assoc($result_Condition);
$res_co = $res_Condition['Condition'];

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 امار سفارش شما",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👤 ارسال کننده سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_ma",'callback_data'=>"ssss"],
],
[
    ['text'=>"🖥 نوع سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_ty",'callback_data'=>"ssss"],
],
[
    ['text'=>"⌛️ تاریخ سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_da",'callback_data'=>"ssss"],
],
[
    ['text'=>"👤 انجام دهنده سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_fu",'callback_data'=>"ssss"],
],
[
    ['text'=>"📱 وضعیت سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_co",'callback_data'=>"ssss"],
],
]
])
]);

bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ جستجو انجام شد",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
        }
        else{
            bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ این سفارش برای کارمند دیگه ای هست شما نمیتوانید پیگیری کنید این سفارش را",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
        exit();
        }
    }
    else{
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ سفارشی با این کد پیگیری وجود ندارد",
        'parse_mode'=>"HTML",
        ]);
    }
}

if($adminstep['step'] == "backOrdertr"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
$sql_user    = "SELECT `id` FROM `orders` WHERE `id`=$text";
$result_user = mysqli_query($conn,$sql_user);
            
$res_user = mysqli_fetch_assoc($result_user);

$res_us = $res_user['id'];

$sql_user1    = "SELECT `functor` FROM `orders` WHERE `id`=$text";
$result_user1 = mysqli_query($conn,$sql_user1);
            
$res_user1 = mysqli_fetch_assoc($result_user1);

$res_us1 = $res_user1['functor'];

    if(isset($res_us)){
        
        if($res_us1 == $chat_id){
            
$sql_Manufacturer         = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$text";
$result_Manufacturer = mysqli_query($conn,$sql_Manufacturer);
            
$res_Manufacturer    = mysqli_fetch_assoc($result_Manufacturer);
$res_ma = $res_Manufacturer['Manufacturer'];

$sql_type         = "SELECT `type` FROM `orders` WHERE `id`=$text";
$result_type = mysqli_query($conn,$sql_type);
            
$res_type    = mysqli_fetch_assoc($result_type);
$res_ty = $res_type['type'];

$sql_date         = "SELECT `date` FROM `orders` WHERE `id`=$text";
$result_date = mysqli_query($conn,$sql_date);
            
$res_date    = mysqli_fetch_assoc($result_date);
$res_da = $res_date['date'];

$sql_functor         = "SELECT `functor` FROM `orders` WHERE `id`=$text";
$result_functor = mysqli_query($conn,$sql_functor);
            
$res_functor    = mysqli_fetch_assoc($result_functor);
$res_fu = $res_functor['functor'];

$sql_Condition         = "SELECT `Condition` FROM `orders` WHERE `id`=$text";
$result_Condition = mysqli_query($conn,$sql_Condition);
            
$res_Condition    = mysqli_fetch_assoc($result_Condition);
$res_co = $res_Condition['Condition'];

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 امار سفارش شما",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👤 ارسال کننده سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_ma",'callback_data'=>"ssss"],
],
[
    ['text'=>"🖥 نوع سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_ty",'callback_data'=>"ssss"],
],
[
    ['text'=>"⌛️ تاریخ سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_da",'callback_data'=>"ssss"],
],
[
    ['text'=>"👤 انجام دهنده سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_fu",'callback_data'=>"ssss"],
],
[
    ['text'=>"📱 وضعیت سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_co",'callback_data'=>"ssss"],
],
]
])
]);

bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ جستجو انجام شد",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
        }
        else{
            bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ این سفارش برای کارمند دیگه ای هست شما نمیتوانید پیگیری کنید این سفارش را",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
        exit();
        }
    }
    else{
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ سفارشی با این کد پیگیری وجود ندارد",
        'parse_mode'=>"HTML",
        ]);
    }
}

if($adminstep['step'] == "backOrderthhh"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
$sql_user    = "SELECT `id` FROM `orders` WHERE `id`=$text";
$result_user = mysqli_query($conn,$sql_user);
            
$res_user = mysqli_fetch_assoc($result_user);

$res_us = $res_user['id'];

$sql_user1    = "SELECT `functor` FROM `orders` WHERE `id`=$text";
$result_user1 = mysqli_query($conn,$sql_user1);
            
$res_user1 = mysqli_fetch_assoc($result_user1);

$res_us1 = $res_user1['functor'];

    if(isset($res_us)){
        
        if($res_us1 == $chat_id){
            
$sql_Manufacturer         = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$text";
$result_Manufacturer = mysqli_query($conn,$sql_Manufacturer);
            
$res_Manufacturer    = mysqli_fetch_assoc($result_Manufacturer);
$res_ma = $res_Manufacturer['Manufacturer'];

$sql_type         = "SELECT `type` FROM `orders` WHERE `id`=$text";
$result_type = mysqli_query($conn,$sql_type);
            
$res_type    = mysqli_fetch_assoc($result_type);
$res_ty = $res_type['type'];

$sql_date         = "SELECT `date` FROM `orders` WHERE `id`=$text";
$result_date = mysqli_query($conn,$sql_date);
            
$res_date    = mysqli_fetch_assoc($result_date);
$res_da = $res_date['date'];

$sql_functor         = "SELECT `functor` FROM `orders` WHERE `id`=$text";
$result_functor = mysqli_query($conn,$sql_functor);
            
$res_functor    = mysqli_fetch_assoc($result_functor);
$res_fu = $res_functor['functor'];

$sql_Condition         = "SELECT `Condition` FROM `orders` WHERE `id`=$text";
$result_Condition = mysqli_query($conn,$sql_Condition);
            
$res_Condition    = mysqli_fetch_assoc($result_Condition);
$res_co = $res_Condition['Condition'];

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 امار سفارش شما",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👤 ارسال کننده سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_ma",'callback_data'=>"ssss"],
],
[
    ['text'=>"🖥 نوع سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_ty",'callback_data'=>"ssss"],
],
[
    ['text'=>"⌛️ تاریخ سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_da",'callback_data'=>"ssss"],
],
[
    ['text'=>"👤 انجام دهنده سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_fu",'callback_data'=>"ssss"],
],
[
    ['text'=>"📱 وضعیت سفارش",'callback_data'=>"ssss"],
    ['text'=>"$res_co",'callback_data'=>"ssss"],
],
]
])
]);

bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ جستجو انجام شد",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
        }
        else{
            bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ این سفارش برای کارمند دیگه ای هست شما نمیتوانید پیگیری کنید این سفارش را",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
        exit();
        }
    }
    else{
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ سفارشی با این کد پیگیری وجود ندارد",
        'parse_mode'=>"HTML",
        ]);
    }
}

if($adminstep['step'] == "number2" and $text != $back){
    
    $text_admin = explode(",",$text);
    $user_id = $text_admin['0'];
    $text_admin2 = $text_admin['1'];
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    mysqli_query($conn,"UPDATE `users` SET `oprator`='$text_admin2' WHERE id='$user_id' LIMIT 1");
    
    $sql44    = "SELECT `time` FROM `Permission` WHERE `id`=$user_id";
    $result44 = mysqli_query($conn,$sql44);
    $res44 = mysqli_fetch_assoc($result44);
    $trsrul44 = $res44['time'];
    
    $sql22    = "SELECT `number` FROM `Permission` WHERE `id`=$user_id";
    $result22 = mysqli_query($conn,$sql22);
    $res22 = mysqli_fetch_assoc($result22);
    $trsrul22 = $res22['number'];
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$user_id,
'text'=>"👤 مشتری گرامی حساب شما برای خدمات اپراتور تایید شد

📊 تعداد ارسال درخاست سفارش : $trsrul22
🧭 تاریخ انقضا : $trsrul44",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options),
]);
}

if($adminstep['step'] == "ShopSite"){
    
$sql_oprator    = "SELECT `oprator` FROM `users` WHERE `id`=$chat_id";
$result_oprator = mysqli_query($conn,$sql_oprator);
            
$res_oprator = mysqli_fetch_assoc($result_oprator);
$res_op = $res_oprator['oprator'];

$sql_orders    = "SELECT * FROM `orders`";
$result_orders = mysqli_query($conn,$sql_orders);
$res_orders    = mysqli_num_rows($result_orders);

$olders = $res_orders + 1;
$sql222    = "INSERT INTO `orders` (`id`, `Manufacturer`, `type`, `date`, `functor`, `Condition`) VALUES ($olders, $chat_id, 'oprator', 0, $res_op, 'doing')";
$result2222 = mysqli_query($conn,$sql222);

$sql_f         = "SELECT `orders` FROM `users` WHERE `id`=$chat_id";
$result_f = mysqli_query($conn,$sql_f);
$res_f    = mysqli_fetch_assoc($result_f);

$ok = $res_f['orders'] + 1;


mysqli_query($conn,"UPDATE `users` SET `orders`='$ok' WHERE id='$chat_id' LIMIT 1");

bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ سفارش شما ثبت شد",
        'parse_mode'=>"HTML",
        ]);
        
        bot('sendMessage',[
        'chat_id'=>$res_op,
        'text'=>"✅ #سفارش_جدید

👨‍💻 نوع سفارش : اپراتور
👤 ارسال کننده : $chat_id
🏷 کد محصول : $olders

📝 متن سفارش : $text",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"✅ تکمیل کردن پروژه",'callback_data'=>"opratorOprator"]
],
]
])
]);
}

if ($data == "opratorOprator"){

bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"🏷 کد سفارشی که میخاید تایید کنید و پیام جواب مشتری را ارسال کنیدبه صورت زیر

id,text

id : کد سفارش
text : پیام جواب مشتری",
'parse_mode'=>"HTML",
]);

mysqli_query($conn,"UPDATE `users` SET `step`='opratorOprator' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}

if($adminstep['step'] == "opratorOprator"){
    
    $text_admin = explode(",",$text);
    $code = $text_admin['0'];
    $text_op = $text_admin['1'];
    
$sql_ok_orders    = "SELECT `id` FROM `orders` WHERE `id`=$code";
$result_ok_orders = mysqli_query($conn,$sql_ok_orders);
            
$res_ok_orders = mysqli_fetch_assoc($result_ok_orders);

$sql_ok_orders1    = "SELECT `functor` FROM `orders` WHERE `id`=$code";
$result_ok_orders1 = mysqli_query($conn,$sql_ok_orders1);
            
$res_ok_orders1 = mysqli_fetch_assoc($result_ok_orders1);
$res_ok_ord = $res_ok_orders1['functor'];

$sql_ok_orders2    = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$code";
$result_ok_orders2 = mysqli_query($conn,$sql_ok_orders2);
            
$res_ok_orders2 = mysqli_fetch_assoc($result_ok_orders2);
$res_ok_ord2 = $res_ok_orders2['Manufacturer'];

$sql_ok_orders3   = "SELECT `coin` FROM `opator` WHERE `id`=$chat_id";
$result_ok_orders3 = mysqli_query($conn,$sql_ok_orders3);
            
$res_ok_orders3 = mysqli_fetch_assoc($result_ok_orders3);
$res_ok_ord3 = $res_ok_orders3['coin'];

$sql_ok_orders4   = "SELECT `jobdone` FROM `opator` WHERE `id`=$chat_id";
$result_ok_orders4 = mysqli_query($conn,$sql_ok_orders4);
            
$res_ok_orders4 = mysqli_fetch_assoc($result_ok_orders4);
$res_ok_ord4 = $res_ok_orders4['jobdone'];

$sql_ok_orders5   = "SELECT `Condition` FROM `orders` WHERE `id`=$code";
$result_ok_orders5 = mysqli_query($conn,$sql_ok_orders5);
            
$res_ok_orders5 = mysqli_fetch_assoc($result_ok_orders5);
$res_ok_ord5 = $res_ok_orders5['Condition'];

$sql_ok_orders33    = "SELECT `dastmozd` FROM `opator` WHERE `id`=$chat_id";
$result_ok_orders33 = mysqli_query($conn,$sql_ok_orders33);
            
$res_ok_orders33 = mysqli_fetch_assoc($result_ok_orders33);
$res_ok_ord33 = $res_ok_orders33['dastmozd'];
if($res_ok_orders){
    
    if($res_ok_ord5 == "ok"){
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⚠️ این سفارش انجام شده است",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
    }
    
    if($res_ok_ord == $chat_id){
        
        mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
        
    
    mysqli_query($conn,"UPDATE `orders` SET `Condition`='ok' WHERE id='$code' LIMIT 1");
    
    $op_coin = $res_ok_ord3 + $res_ok_ord33;
    
    mysqli_query($conn,"UPDATE `opator` SET `coin`='$op_coin' WHERE id='$chat_id' LIMIT 1");
    
    $op_jop = $res_ok_ord4 + 1;
    
    mysqli_query($conn,"UPDATE `opator` SET `jobdone`='$op_jop' WHERE id='$chat_id' LIMIT 1");
    
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ سفارش تایید شد",
'parse_mode'=>"HTML",
]);

bot('sendMessage',[
'chat_id'=>$res_ok_ord2,
'text'=>"✅ سفارش شما #تایید شد

📝 متن جواب اپراتور : $text_op",
'parse_mode'=>"HTML",
]);
    }
    else{
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ این سفارش برای شما نیست",
'parse_mode'=>"HTML",
]);
    }
}
else{
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ همچین سفارشی با این کد پیگیری وجود ندارد",
'parse_mode'=>"HTML",
]);
}
}

if($adminstep['step'] == "Contentp"){
    
$sql_Contentp    = "SELECT `Contentproducer` FROM `SEOwork` WHERE `id`=$chat_id";
$result_Contentp = mysqli_query($conn,$sql_Contentp);
            
$res_Contentp = mysqli_fetch_assoc($result_Contentp);
$res_co = $res_Contentp['Contentproducer'];

$sql_orders    = "SELECT * FROM `orders`";
$result_orders = mysqli_query($conn,$sql_orders);
$res_orders    = mysqli_num_rows($result_orders);

$olders = $res_orders + 1;


$sql222    = "INSERT INTO `orders` (`id`, `Manufacturer`, `type`, `date`, `functor`, `Condition`) VALUES ($olders, $chat_id, 'Contentp', 0, $res_co, 'doing')";
$result2222 = mysqli_query($conn,$sql222);

$sql_f         = "SELECT `orders` FROM `users` WHERE `id`=$chat_id";
$result_f = mysqli_query($conn,$sql_f);
$res_f    = mysqli_fetch_assoc($result_f);

$ok = $res_f['orders'] + 1;


mysqli_query($conn,"UPDATE `users` SET `orders`='$ok' WHERE id='$chat_id' LIMIT 1");

bot('sendMessage',[
'chat_id'=>$res_co,
'text'=>"🛍 سفارش #جدید سئو کار

🏷 کد محصول : $olders
👨‍💻 سئو کار ارسال کننده : $chat_id

📝 متن سئو کار : $text",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"✅ تکمیل کردن پروژه",'callback_data'=>"Contentp"]
],
]
])
]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ سفارش شما ارسال شد",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if ($data == "seoProct"){

bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"🏷 کد پیگیری و متن جواب مشتری را به صورت زیر بنویسید

id,text

id : کد پیگیری
text : متن جواب",
'parse_mode'=>"HTML",
]);

mysqli_query($conn,"UPDATE `users` SET `step`='seoProct' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}

if($adminstep['step'] == "seoProct"){
    
    $text_admin = explode(",",$text);
    $code = $text_admin['0'];
    $text_op = $text_admin['1'];
    
$sql_ok_orders    = "SELECT `id` FROM `orders` WHERE `id`=$code";
$result_ok_orders = mysqli_query($conn,$sql_ok_orders);
            
$res_ok_orders = mysqli_fetch_assoc($result_ok_orders);

$sql_ok_orders1    = "SELECT `functor` FROM `orders` WHERE `id`=$code";
$result_ok_orders1 = mysqli_query($conn,$sql_ok_orders1);
            
$res_ok_orders1 = mysqli_fetch_assoc($result_ok_orders1);
$res_ok_ord = $res_ok_orders1['functor'];

$sql_ok_orders5   = "SELECT `Condition` FROM `orders` WHERE `id`=$code";
$result_ok_orders5 = mysqli_query($conn,$sql_ok_orders5);
            
$res_ok_orders5 = mysqli_fetch_assoc($result_ok_orders5);
$res_ok_ord5 = $res_ok_orders5['Condition'];

if($res_ok_orders){
    
    if($res_ok_ord5 == "ok"){
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⚠️ این سفارش انجام شده است",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
    }
    
    if($res_ok_ord == $chat_id){
        
        mysqli_query($conn,"UPDATE `users` SET `step`='dastmozdSeo' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻 سئو کار گرامی لطفا زمان صرف کرده برای این پروژه را به دقیقه . پیام خود را برای کارفرما و کد پیگیری سفارش را به صورت زیر بنویسید

time,text,code

time : زمان صرف شده به دقیقه
text : متن پیام شما
code : کد پیگیری",
'parse_mode'=>"HTML",
]);
exit();
    }
    else{
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ این سفارش برای شما نیست",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
    }
}
else{
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ همچین سفارشی با این کد پیگیری وجود ندارد",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}

}

if($adminstep['step'] == "dastmozdSeo"){
    
    $text_admin = explode(",",$text);
    $time = $text_admin['0'];
    $txt = $text_admin['1'];
    $code = $text_admin['2'];
    
    $sql_ok_orders6   = "SELECT `dastmozd` FROM `SEOwork` WHERE `id`=$chat_id";
$result_ok_orders6 = mysqli_query($conn,$sql_ok_orders6);
            
$res_ok_orders6 = mysqli_fetch_assoc($result_ok_orders6);
$res_ok_ord6 = $res_ok_orders6['dastmozd'];

$sql_ok_orders4   = "SELECT `jobdone` FROM `SEOwork` WHERE `id`=$chat_id";
$result_ok_orders4 = mysqli_query($conn,$sql_ok_orders4);
            
$res_ok_orders4 = mysqli_fetch_assoc($result_ok_orders4);
$res_ok_ord4 = $res_ok_orders4['jobdone'];

$sql_ok_orders3   = "SELECT `coin` FROM `SEOwork` WHERE `id`=$chat_id";
$result_ok_orders3 = mysqli_query($conn,$sql_ok_orders3);
            
$res_ok_orders3 = mysqli_fetch_assoc($result_ok_orders3);
$res_ok_ord3 = $res_ok_orders3['coin'];

$sql_ok_orders2    = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$code";
$result_ok_orders2 = mysqli_query($conn,$sql_ok_orders2);
            
$res_ok_orders2 = mysqli_fetch_assoc($result_ok_orders2);
$res_ok_ord2 = $res_ok_orders2['Manufacturer'];


$ok_seoDastMozd = $res_ok_ord6 * $time;

$ok2 = $res_ok_ord3 + $ok_seoDastMozd;

mysqli_query($conn,"UPDATE SEOwork SET coin='$ok2' WHERE id='$chat_id' LIMIT 1");
    
    $op_jop = $res_ok_ord4 + 1;
    
    mysqli_query($conn,"UPDATE SEOwork SET jobdone='$op_jop' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ سفارش تایید شد",
'parse_mode'=>"HTML",
]);

bot('sendMessage',[
'chat_id'=>$res_ok_ord2,
'text'=>"✅ سفارش شما #تایید شد

📝 متن جواب سئوکار : $txt",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
    


if ($data == "Contentp"){

bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"🏷 کد پیگیری سفارش سئوکار را وارد کنید",
'parse_mode'=>"HTML",
]);

mysqli_query($conn,"UPDATE `users` SET `step`='Contentp2' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}

if($adminstep['step'] == "Contentp2"){
    
$sql_ok_orders2    = "SELECT `id` FROM `orders` WHERE `id`=$text";
$result_ok_orders2 = mysqli_query($conn,$sql_ok_orders2);
            
$res_ok_orders2 = mysqli_fetch_assoc($result_ok_orders2);

$sql_ok_orders1    = "SELECT `functor` FROM `orders` WHERE `id`=$text";
$result_ok_orders1 = mysqli_query($conn,$sql_ok_orders1);
            
$res_ok_orders1 = mysqli_fetch_assoc($result_ok_orders1);
$res_ok_ord = $res_ok_orders1['functor'];

$sql_ok_orders5   = "SELECT `Condition` FROM `orders` WHERE `id`=$text";
$result_ok_orders5 = mysqli_query($conn,$sql_ok_orders5);
            
$res_ok_orders5 = mysqli_fetch_assoc($result_ok_orders5);
$res_ok_ord5 = $res_ok_orders5['Condition'];

if(isset($res_ok_orders2)){
    
    if($res_ok_ord5 == "ok"){
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⚠️ این سفارش انجام شده است",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
    }
    
    if($res_ok_ord == $chat_id){
        
        mysqli_query($conn,"UPDATE `Contentproducer` SET `sfarsh`='$text' WHERE id='$chat_id' LIMIT 1");
        
        mysqli_query($conn,"UPDATE `users` SET `step`='Contentp3' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🗂 فایل خودتونو ارسال کنید",
'parse_mode'=>"HTML",
]);
exit();
    }
    else{
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ انجام دهنده این سفارش شما نیستید",
'parse_mode'=>"HTML",
]);
    }
}
else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ سفارشی با همچین کد پیگیری وجود ندارد",
'parse_mode'=>"HTML",
]);
}
}

if($adminstep['step'] == "Contentp3"){
    
$sql_ok_orders12    = "SELECT `sfarsh` FROM `Contentproducer` WHERE `id`=$chat_id";
$result_ok_orders12 = mysqli_query($conn,$sql_ok_orders12);
            
$res_ok_orders12 = mysqli_fetch_assoc($result_ok_orders12);
$res_ok_ord23 = $res_ok_orders12['sfarsh'];

$sql_ok_orders122    = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$res_ok_ord23";
$result_ok_orders122 = mysqli_query($conn,$sql_ok_orders122);
            
$res_ok_orders122 = mysqli_fetch_assoc($result_ok_orders122);
$res_ok_ord232 = $res_ok_orders122['Manufacturer'];

mysqli_query($conn,"UPDATE `Contentproducer` SET `sfarsh`='0' WHERE id='$chat_id' LIMIT 1");

bot('sendDocument',[
    'document'=>"$file_id2",
    'chat_id'=>$res_ok_ord232,
    'caption'=>"✅ جواب مدیریت محتوا

🏷 کد سفارش : $res_ok_ord23

⚠️ لطفا در صورت تایید بودن فایل ارسالی را تایید نمایید در غیر این صورت لغو کنید",
]); 

bot('sendMessage',[
'chat_id'=>$res_ok_ord232,
'text'=>"⁉️ ایا ارسالی مدیریت محتوا درست بود",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"✅ تایید کردن",'callback_data'=>"ok_c"],
    ['text'=>"❌ رد کردن",'callback_data'=>"no_c"]
],
]
])
]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ جواب شما برای سئو کار ارسال شد در صورت تایید کردن سئو کار مبلغ پروژه به حساب شما افزوده میشود",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if ($data == "ok_c"){

bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"🏷 کد پیگیری سفارش و تعداد کلمه ها را ارسال کنید به صورت زیر

id,code

id : کد پیگیری
code : تعداد کلمه",
'parse_mode'=>"HTML",
]);

mysqli_query($conn,"UPDATE `users` SET `step`='ok_c' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}

if($adminstep['step'] == "ok_c"){
    
    $text_admin = explode(",",$text);
    $code = $text_admin['0'];
    $text_op = $text_admin['1'];
    
$sql_ok_orders125    = "SELECT `functor` FROM `orders` WHERE `id`=$code";
$result_ok_orders125 = mysqli_query($conn,$sql_ok_orders125);
            
$res_ok_orders125 = mysqli_fetch_assoc($result_ok_orders125);
$res_ok_ord235 = $res_ok_orders125['functor'];
    
$sql_ok_orders12    = "SELECT `id` FROM `orders` WHERE `id`=$code";
$result_ok_orders12 = mysqli_query($conn,$sql_ok_orders12);
            
$res_ok_orders12 = mysqli_fetch_assoc($result_ok_orders12);
$res_ok_ord23 = $res_ok_orders12['id'];

$sql_ok_orders122    = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$res_ok_ord23";
$result_ok_orders122 = mysqli_query($conn,$sql_ok_orders122);
            
$res_ok_orders122 = mysqli_fetch_assoc($result_ok_orders122);
$res_ok_ord232 = $res_ok_orders122['Manufacturer'];

$sql_ok_orders1222    = "SELECT `Condition` FROM `orders` WHERE `id`=$res_ok_ord23";
$result_ok_orders1222 = mysqli_query($conn,$sql_ok_orders1222);
            
$res_ok_orders1222 = mysqli_fetch_assoc($result_ok_orders1222);
$res_ok_ord2322 = $res_ok_orders1222['Condition'];

$sql_ok_orders123    = "SELECT `coin` FROM `Contentproducer` WHERE `id`=$res_ok_ord23";
$result_ok_orders123 = mysqli_query($conn,$sql_ok_orders123);
            
$res_ok_orders123 = mysqli_fetch_assoc($result_ok_orders123);
$res_ok_ord233 = $res_ok_orders123['coin'];

$sql_ok_orders124    = "SELECT `jobdone` FROM `Contentproducer` WHERE `id`=$res_ok_ord23";
$result_ok_orders124 = mysqli_query($conn,$sql_ok_orders124);
            
$res_ok_orders124 = mysqli_fetch_assoc($result_ok_orders124);
$res_ok_ord234 = $res_ok_orders124['jobdone'];

$sql_ok_orders1255    = "SELECT `dastmozd` FROM `Contentproducer` WHERE `id`=$res_ok_ord235";
$result_ok_orders1255 = mysqli_query($conn,$sql_ok_orders1255);
            
$res_ok_orders1255 = mysqli_fetch_assoc($result_ok_orders1255);
$res_ok_ord2355 = $res_ok_orders1255['dastmozd'];

if(isset($res_ok_ord23)){
    
    if($res_ok_ord2322 == "ok"){
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ این سفارش تایید شده بوده",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
if($res_ok_ord232 == $chat_id){
    
    $res_hesab = $res_ok_ord2355 * $text_op;
    
    $res_hesab2 = $res_ok_ord233 + $res_hesab;
    
    $res_hesab3 = $res_ok_ord234 + 1;
    
    mysqli_query($conn,"UPDATE `Contentproducer` SET `coin`='$res_hesab2' WHERE id='$res_ok_ord235' LIMIT 1");
    mysqli_query($conn,"UPDATE `Contentproducer` SET `jobdone`='$res_hesab3' WHERE id='$res_ok_ord235' LIMIT 1");
    mysqli_query($conn,"UPDATE `orders` SET `Condition`='ok' WHERE id='$code' LIMIT 1");
    
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ #تایید_شد",
'parse_mode'=>"HTML",
]);

bot('sendMessage',[
'chat_id'=>$res_ok_ord235,
'text'=>"👨‍💻 مهندس پروژه شما توسط سئو کار تایید شد لغات تایید شده سئو کار تعداد ( $text_op ) بوده و بخاطر این ها مبلغ ( $res_hesab ) به عنوان پاداش به حساب شما افزوده شد

🏷 کد سفارش : $code",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}else{
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ این سفارش برای شما نیست",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
    }
    else{
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ سفارشی با این کد پیگیری وجود ندارد",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
}

if($data == "no_c"){
    
    bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"⚠️ لطفا کد پیگیری و دلیل لغو را به صورت زیر بنویسید

id,text

id : کد پیگیری
text : متن دلیل",
'parse_mode'=>"HTML",
]);

mysqli_query($conn,"UPDATE `users` SET `step`='no_c' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}
if($adminstep['step'] == "no_c"){
    
    $text_admin = explode(",",$text);
    $code = $text_admin['0'];
    $text_op = $text_admin['1'];
    
$sql_ok_orders125    = "SELECT `functor` FROM `orders` WHERE `id`=$code";
$result_ok_orders125 = mysqli_query($conn,$sql_ok_orders125);
            
$res_ok_orders125 = mysqli_fetch_assoc($result_ok_orders125);
$res_ok_ord235 = $res_ok_orders125['functor'];
    
$sql_ok_orders1332    = "SELECT `id` FROM `orders` WHERE `id`=$code";
$result_ok_orders1332 = mysqli_query($conn,$sql_ok_orders1332);
            
$res_ok_orders1332 = mysqli_fetch_assoc($result_ok_orders1332);
$res_ok_ord2333 = $res_ok_orders1332['id'];

$sql_ok_orders1224    = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$code";
$result_ok_orders1224 = mysqli_query($conn,$sql_ok_orders1224);
            
$res_ok_orders1224 = mysqli_fetch_assoc($result_ok_orders1224);
$res_ok_ord2324 = $res_ok_orders1224['Manufacturer'];

$sql_ok_orders1222    = "SELECT `Condition` FROM `orders` WHERE `id`=$code";
$result_ok_orders1222 = mysqli_query($conn,$sql_ok_orders1222);
            
$res_ok_orders1222 = mysqli_fetch_assoc($result_ok_orders1222);
$res_ok_ord2322 = $res_ok_orders1222['Condition'];

if(isset($res_ok_ord2333)){
    
    if($res_ok_ord2322 == "ok"){
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ این سفارش تایید شده بوده",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
    }
    
    if($res_ok_ord2324 == $chat_id){
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ با موفقیت انجام شد",
'parse_mode'=>"HTML",
]);

bot('sendMessage',[
'chat_id'=>$res_ok_ord235,
'text'=>"❌ کار شما توسط سئوکار خراب تشخیص داده شده است 

📝دلیل لغو : $text_op
🏷 کد سفارش : $code",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"✅ تکمیل کردن پروژه",'callback_data'=>"Contentp"]
],
]
])
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
        
    }else{
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ این سفارش برای شما نیست",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
    }
    
}else{
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ سفارشی با این کد پیگیری وجود ندارد",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
}

if($data == "akhrajSeo"){
    
    bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='akhrajSeo' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}

if($adminstep['step'] == "akhrajSeo" and $text != $back){
    
$sql_ok_orders1222    = "SELECT `id` FROM `SEOwork` WHERE `id`=$text";
$result_ok_orders1222 = mysqli_query($conn,$sql_ok_orders1222);
            
$res_ok_orders1222 = mysqli_fetch_assoc($result_ok_orders1222);
$res_ok_ord2322 = $res_ok_orders1222['id'];

if(isset($res_ok_ord2322)){
    
    mysqli_query($conn,"DELETE FROM `SEOwork` WHERE `id`='$text' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ با موفقیت حذف شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$text,
'text'=>"❌ شما از ربات اخراج شدید",
'parse_mode'=>"HTML",
]);

mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
else{
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ کارمندی با این ایدی عددی وجود ندارد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
}

if($data == "akhrajGrafic"){
    
    bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='akhrajGrafic' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}

if($adminstep['step'] == "akhrajGrafic" and $text != $back){
    
$sql_ok_orders1222    = "SELECT `id` FROM `GraphicDesigner` WHERE `id`=$text";
$result_ok_orders1222 = mysqli_query($conn,$sql_ok_orders1222);
            
$res_ok_orders1222 = mysqli_fetch_assoc($result_ok_orders1222);
$res_ok_ord2322 = $res_ok_orders1222['id'];

if(isset($res_ok_ord2322)){
    
    mysqli_query($conn,"DELETE FROM `GraphicDesigner` WHERE `id`='$text' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ با موفقیت حذف شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$text,
'text'=>"❌ شما از ربات اخراج شدید",
'parse_mode'=>"HTML",
]);

mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
else{
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ کارمندی با این ایدی عددی وجود ندارد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
}

if($data == "akhrajCo"){
    
    bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='akhrajCo' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}

if($adminstep['step'] == "akhrajCo" and $text != $back){
    
$sql_ok_orders1222    = "SELECT `id` FROM `Contentproducer` WHERE `id`=$text";
$result_ok_orders1222 = mysqli_query($conn,$sql_ok_orders1222);
            
$res_ok_orders1222 = mysqli_fetch_assoc($result_ok_orders1222);
$res_ok_ord2322 = $res_ok_orders1222['id'];

if(isset($res_ok_ord2322)){
    
    mysqli_query($conn,"DELETE FROM `Contentproducer` WHERE `id`='$text' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ با موفقیت حذف شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$text,
'text'=>"❌ شما از ربات اخراج شدید",
'parse_mode'=>"HTML",
]);

mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
else{
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ کارمندی با این ایدی عددی وجود ندارد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
}

if($data == "akhrajOPrator"){
    
    bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 ایدی عددی کارمند را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='akhrajOPrator' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}

if($adminstep['step'] == "akhrajOPrator" and $text != $back){
    
$sql_ok_orders1222    = "SELECT `id` FROM `opator` WHERE `id`=$text";
$result_ok_orders1222 = mysqli_query($conn,$sql_ok_orders1222);
            
$res_ok_orders1222 = mysqli_fetch_assoc($result_ok_orders1222);
$res_ok_ord2322 = $res_ok_orders1222['id'];

if(isset($res_ok_ord2322)){
    
    mysqli_query($conn,"DELETE FROM `opator` WHERE `id`='$text' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ با موفقیت حذف شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$text,
'text'=>"❌ شما از ربات اخراج شدید",
'parse_mode'=>"HTML",
]);

mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
else{
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ کارمندی با این ایدی عددی وجود ندارد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
}

if($adminstep['step'] == "akhraj_mem" and $text != $back){
    
    $sql_ok_orders1222    = "SELECT `id` FROM `Permission` WHERE `id`=$text";
$result_ok_orders1222 = mysqli_query($conn,$sql_ok_orders1222);
            
$res_ok_orders1222 = mysqli_fetch_assoc($result_ok_orders1222);
$res_ok_ord2322 = $res_ok_orders1222['id'];

if(isset($res_ok_ord2322)){
    
    mysqli_query($conn,"DELETE FROM `Permission` WHERE `id`='$text' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ با موفقیت حذف شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$text,
'text'=>"❌ شما از ربات اخراج شدید",
'parse_mode'=>"HTML",
]);

mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");

}
else{
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ مشتری با این ایدی عددی وجود ندارد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
}

if($adminstep['step'] == "mazadKar"){
    
    $text_admin = explode(",",$text);
    $time = $text_admin['0'];
    $text_mazadKar = $text_admin['1'];
    
$sql    = "SELECT * FROM `mazadKar`";
$result = mysqli_query($conn,$sql);
$res    = mysqli_num_rows($result);

$ok = $res + 1;
$date = jdate("Y/m/d");
    
    $sql2    = "INSERT INTO `mazadKar` (id, SeoWork, number, time, result) VALUES ($ok, $chat_id, $time, $date, 'waiting')";
    $result2 = mysqli_query($conn,$sql2);
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ درخاست ارسال شد لطفا منتظر تایید ادمین بمانید",
'parse_mode'=>"HTML",
]);

bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"👨‍💻 سلام ادمین گرامی یک درخاست تایید برای مازاد کار امده از طرف سئو کار

👨‍💻 ارسال کننده : $chat_id
📄 توضیحات : $text_mazadKar
🧭 زمان : $time
🗂 کد پیگیری : $ok",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"✅ تایید کردن",'callback_data'=>"mazadOk"]
],
]
])
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}

if($data == "mazadOk"){
    
    bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"🗂 لطفا کدپیگیری سفارش را ارسال کنید

👈 در صورت لغو درخاست عبارت /MazadOff را ارسال فرمایید",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='mazadOk2' WHERE id='$chat_id_inline' LIMIT 1");
exit();
}

if($adminstep['step'] == "mazadOk2" and $text != "/MazadOff"){
    
$sql_ok_orders1222    = "SELECT `id` FROM `mazadKar` WHERE `id`=$text";
$result_ok_orders1222 = mysqli_query($conn,$sql_ok_orders1222);
            
$res_ok_orders1222 = mysqli_fetch_assoc($result_ok_orders1222);
$res_ok_ord2322 = $res_ok_orders1222['id'];

$sql_ok_orders122   = "SELECT `result` FROM `mazadKar` WHERE `id`=$text";
$result_ok_orders122= mysqli_query($conn,$sql_ok_orders122);
            
$res_ok_orders122 = mysqli_fetch_assoc($result_ok_orders122);
$res_ok_ord232 = $res_ok_orders122['result'];

if(isset($res_ok_ord2322)){
    
    if($res_ok_ord232 == "ok"){
        
        bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ این درخاست تایید شده بود",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
    }
    else{
        
$sql_ok_orders12   = "SELECT `SeoWork` FROM `mazadKar` WHERE `id`=$text";
$result_ok_orders12= mysqli_query($conn,$sql_ok_orders12);
            
$res_ok_orders12 = mysqli_fetch_assoc($result_ok_orders12);
$res_ok_ord23 = $res_ok_orders12['SeoWork'];

$sql_ok_orders1   = "SELECT `dastmozd` FROM `SEOwork` WHERE `id`=$res_ok_ord23";
$result_ok_orders1= mysqli_query($conn,$sql_ok_orders1);
            
$res_ok_orders1 = mysqli_fetch_assoc($result_ok_orders1);
$res_ok_ord2 = $res_ok_orders1['dastmozd'];

$sql_ok_orders   = "SELECT `number` FROM `mazadKar` WHERE `id`=$text";
$result_ok_orders= mysqli_query($conn,$sql_ok_orders);
            
$res_ok_orders = mysqli_fetch_assoc($result_ok_orders);
$res_ok_ord = $res_ok_orders['number'];

$sql_ok_order   = "SELECT `coin` FROM `SEOwork` WHERE `id`=$res_ok_ord23";
$result_ok_order= mysqli_query($conn,$sql_ok_order);
            
$res_ok_order = mysqli_fetch_assoc($result_ok_order);
$res_ok_or = $res_ok_order['coin'];


$ok_dasmozd = $res_ok_ord2 * $res_ok_ord;
$ok2 = $ok_dasmozd + $res_ok_or;

mysqli_query($conn,"UPDATE `SEOwork` SET `coin`='$ok2' WHERE id='$res_ok_ord23' LIMIT 1");
mysqli_query($conn,"UPDATE `mazadKar` SET `result`='ok' WHERE id='$text' LIMIT 1");

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ با موفقیت تایید شد",
'parse_mode'=>"HTML",
]);

bot('sendMessage',[
'chat_id'=>$res_ok_ord23,
'text'=>"✅ #تاییدیه

درخاست شما توسط مدیر تایید شد و مبلغ $ok_dasmozd به حسابتون افزوده شد🔺

🗂 کد پیگیری درخاست : $text",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
    }
}
else{
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ درخاستی با این کد وجود ندارد",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
exit();
}
}

if($adminstep['step'] == "graficMem" and $text != $back){
    
    $text_admin = explode(",",$text);
    $user = $text_admin['0'];
    $graficId = $text_admin['1'];
    $NumberSef = $text_admin['2'];
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    mysqli_query($conn,"UPDATE `users` SET `GraphicDesigner`='$graficId' WHERE id='$user' LIMIT 1");
    
    $sql2    = "INSERT INTO `Permission` (id, Permission, number, time, numberG) VALUES ($user, 5, 0, '$next', '$NumberSef')";
    $result2 = mysqli_query($conn,$sql2);
    
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$user,
'text'=>"👤 مشتری گرامی حساب شما برای خدمات اپراتور تایید شد

📊 تعداد ارسال درخاست سفارش : $NumberSef
🧭 تاریخ انقضا : $next",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options),
]);
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if($adminstep['step'] == "AddAllAc" and $text != $back){
    
    $text_admin = explode(",",$text);
    $user = $text_admin['0'];
    $graficId = $text_admin['1'];
    $seoId = $text_admin['2'];
    $opratorId = $text_admin['3'];
    $graficNum = $text_admin['4'];
    $seoNumber = $text_admin['5'];
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    mysqli_query($conn,"UPDATE `users` SET `GraphicDesigner`='$graficId' WHERE id='$user' LIMIT 1");
    mysqli_query($conn,"UPDATE `users` SET `seo`='$seoId' WHERE id='$user' LIMIT 1");
    mysqli_query($conn,"UPDATE `users` SET `oprator`='$opratorId' WHERE id='$user' LIMIT 1");
    
    $sql2    = "INSERT INTO `Permission` (id, Permission, number, time, numberG) VALUES ($user, 3, '$seoNumber', '$next', '$graficNum')";
    $result2 = mysqli_query($conn,$sql2);
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ انجام شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$user,
'text'=>"👤 مشتری گرامی حساب شما برای خدمات اپراتور تایید شد

📊 تعداد ارسال درخاست سفارش سئو : $seoNumber
📊 تعداد ارسال سفارش گرافیست :$graficNum 
🧭 تاریخ انقضا : $next",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options),
]);
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}

if($adminstep['step'] == "ShopLogo"){
    
$sql_oprator    = "SELECT `GraphicDesigner` FROM `users` WHERE `id`=$chat_id";
$result_oprator = mysqli_query($conn,$sql_oprator);
            
$res_oprator = mysqli_fetch_assoc($result_oprator);
$res_op = $res_oprator['GraphicDesigner'];

$sql_orders    = "SELECT * FROM `orders`";
$result_orders = mysqli_query($conn,$sql_orders);
$res_orders    = mysqli_num_rows($result_orders);

$olders = $res_orders + 1;
$sql222    = "INSERT INTO `orders` (`id`, `Manufacturer`, `type`, `date`, `functor`, `Condition`) VALUES ($olders, $chat_id, 'grafic', 0, $res_op, 'doing')";
$result2222 = mysqli_query($conn,$sql222);

$sql_f         = "SELECT `orders` FROM `users` WHERE `id`=$chat_id";
$result_f = mysqli_query($conn,$sql_f);
$res_f    = mysqli_fetch_assoc($result_f);

$ok = $res_f['orders'] + 1;


mysqli_query($conn,"UPDATE `users` SET `orders`='$ok' WHERE id='$chat_id' LIMIT 1");

bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ سفارش شما ثبت شد",
        'parse_mode'=>"HTML",
        ]);
        
        bot('sendMessage',[
        'chat_id'=>$res_op,
        'text'=>"✅ #سفارش_جدید

👨‍💻 نوع سفارش : گرافیک
👤 ارسال کننده : $chat_id
🏷 کد محصول : $olders

📝 متن سفارش : $text",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"✅ تکمیل کردن پروژه",'callback_data'=>"graficOk"]
],
]
])
]);
}

if($data == "graficOk"){
    
    bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"🏷 کد پیگیری را وارد کنید",
'parse_mode'=>"HTML",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='graficOk' WHERE id='$chat_id_inline' LIMIT 1");

}

if($adminstep['step'] == "graficOk"){
    
$sql_user    = "SELECT `functor` FROM `orders` WHERE `id`=$text";
$result_user = mysqli_query($conn,$sql_user);
            
$res_user = mysqli_fetch_assoc($result_user);

$sql_user3    = "SELECT `Condition` FROM `orders` WHERE `id`=$text";
$result_user3 = mysqli_query($conn,$sql_user3);
            
$res_user3 = mysqli_fetch_assoc($result_user3);

if($res_user['functor'] == $chat_id){
    
    if($res_user3['Condition'] == "doing"){
        
        mysqli_query($conn,"UPDATE `GraphicDesigner` SET `temporary`='$text' WHERE id='$chat_id' LIMIT 1");
        mysqli_query($conn,"UPDATE `users` SET `step`='graficOkSen' WHERE id='$chat_id' LIMIT 1");
        
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"تصویر خود را که میخاید برای مشتری ارسال کنید را برای ربات بفرستید 🔺",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_finish_G),
        ]);
        exit();
    }
    else{
        
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ این سفارش از قبل تایید شده است",
        'parse_mode'=>"HTML",
        ]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    }
}
else{
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ این سفارش برای شما نیست",
        'parse_mode'=>"HTML",
        ]);
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
}

if($adminstep['step'] == "graficOkSen"){
    
    if($text == "$finish_G"){
    
    $sql_gra    = "SELECT `temporary` FROM `GraphicDesigner` WHERE `id`=$chat_id";
$result_gra = mysqli_query($conn,$sql_gra);
            
$res_gra = mysqli_fetch_assoc($result_gra);
$res_gra2 = $res_gra['temporary'];
    if(isset($res_gra2)){
        
        if($res_gra2 != 0){
            
            mysqli_query($conn,"UPDATE `users` SET `step`='graficOkSen2' WHERE id='$chat_id' LIMIT 1");
            
            bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🗂 فایل عکس ها را ارسال کنید",
        'parse_mode'=>"HTML",
        ]);
        exit();
        }
    }
}

else{
    
$sql_gra    = "SELECT `temporary` FROM `GraphicDesigner` WHERE `id`=$chat_id";
$result_gra = mysqli_query($conn,$sql_gra);
            
$res_gra = mysqli_fetch_assoc($result_gra);
$res_gra2 = $res_gra['temporary'];

$sql_gra2    = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$res_gra2";
$result_gra2 = mysqli_query($conn,$sql_gra2);
            
$res_gra22 = mysqli_fetch_assoc($result_gra2);
$res_gra222 = $res_gra22['Manufacturer'];
    
    bot('sendphoto',[
    'photo'=>"$file_id",
    'chat_id'=>$res_gra222,
    'caption'=>"✅ #نکمیل سفارش گرافیست

🗂 کد پیگیری سفارش : $res_gra2",
]);
mysqli_query($conn,"UPDATE `users` SET `step`='graficOkSen' WHERE id='$chat_id' LIMIT 1");
exit();
}}

if($adminstep['step'] == "graficOkSen2"){
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
$sql_gra    = "SELECT `temporary` FROM `GraphicDesigner` WHERE `id`=$chat_id";
$result_gra = mysqli_query($conn,$sql_gra);
            
$res_gra = mysqli_fetch_assoc($result_gra);
$res_gra2 = $res_gra['temporary'];

$sql_gra2    = "SELECT `Manufacturer` FROM `orders` WHERE `id`=$res_gra2";
$result_gra2 = mysqli_query($conn,$sql_gra2);
            
$res_gra22 = mysqli_fetch_assoc($result_gra2);
$res_gra222 = $res_gra22['Manufacturer'];

    bot('sendDocument',[
    'document'=>"$file_id2",
    'chat_id'=>$chanelGrafic,
    'caption'=>"🗂 فایل گرافیست

🗂 کد سفارش : $res_gra2
👨‍💻 انجام دهنده : $chat_id
👤 سفارش دهنده : $res_gra222
⏱ زمان تکمیل : $arshivTm

زمان کار انجام شده : $captio",
]); 

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ #درخاست_تایید_ارسال_شد

👨‍💻 گرافیست محترم درخاست تایید شما برای کار انجام شد و برای مدیر ارسال شد تا تایید کار شما صبور باشید در صورت تایید مدیریت مبلغ دست مزد به حساب شما واریز میشود",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel_gra),
]);

bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"📄 #GraFist

👨‍💻 انجام دهنده : $chat_id
🗂 کد پیگیری : $res_gra2",
        'parse_mode'=>"HTML",
        ]);
        
        bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"مربوط به پیام بالا",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"✅ تایید کردن",'callback_data'=>"graFicTru"]
],
]
])
]);
}

if($data == "graFicTru"){
    
    bot('sendMessage',[
'chat_id'=>$chat_id_inline,
'text'=>"👤 کد پیگیری سفارش و ساعت کاری کارمند را وارد کنید
id,time",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='graFicTru' WHERE id='$chat_id_inline' LIMIT 1");

}

if($adminstep['step'] == "graFicTru" and $text != $back){
    
    $text_admin = explode(",",$text);
    $id = $text_admin['0'];
    $time = $text_admin['1'];
    
$sql_o    = "SELECT `functor` FROM `orders` WHERE `id`=$id";
$result_o = mysqli_query($conn,$sql_o);
            
$res_o = mysqli_fetch_assoc($result_o);
$res_op = $res_o['functor'];

$sql_o2    = "SELECT `dastmozd` FROM `GraphicDesigner` WHERE `id`=$res_op";
$result_o2 = mysqli_query($conn,$sql_o2);
            
$res_o2 = mysqli_fetch_assoc($result_o2);
$res_op2 = $res_o2['dastmozd'];

$sql_o233    = "SELECT `jobdone` FROM `GraphicDesigner` WHERE `id`=$res_op";
$result_o233 = mysqli_query($conn,$sql_o233);
            
$res_o233 = mysqli_fetch_assoc($result_o233);
$res_op233 = $res_o233['jobdone'];

$sql_o22    = "SELECT `coin` FROM `GraphicDesigner` WHERE `id`=$res_op";
$result_o22 = mysqli_query($conn,$sql_o22);
            
$res_o22 = mysqli_fetch_assoc($result_o22);
$res_op22 = $res_o22['coin'];

$ok_gRa = $res_op2 * $time;
$pk     = $res_op22 + $ok_gRa;

$okkk = $res_op233 + 1;

mysqli_query($conn,"UPDATE `GraphicDesigner` SET `coin`='$pk' WHERE id='$res_op' LIMIT 1");
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
mysqli_query($conn,"UPDATE `orders` SET `Condition`='ok' WHERE id='$id' LIMIT 1");
mysqli_query($conn,"UPDATE `GraphicDesigner` SET `jobdone`='$okkk' WHERE id='$id' LIMIT 1");

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تایید شد",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);

bot('sendMessage',[
'chat_id'=>$res_op,
'text'=>"🗂 پروژه شما تایید شد

⏱ زمان ثبت شده برای پروژه شما : $time دقیقه
💰 مبلغ دست مزد : $ok_gRa",
'parse_mode'=>"HTML",
]);
}
else{
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
// ------- Swich -------

$sql_user    = "SELECT `id` FROM `Permission` WHERE `id`=$chat_id";
$result_user = mysqli_query($conn,$sql_user);
            
$res_user = mysqli_fetch_assoc($result_user);

if(isset($res_user['id'])){
switch($text) {
 
    case "/start"              : show_menu();       break;
    case $key1                 : shopSeo();         break;
    case $key2                 : ShopLogo();        break;
    case $key5                 : ShopSite();        break;
    case $support              : support();         break;     
    case $finish              : finish();           break;                             
}
}
if($from_id == $admin){

switch($text) {

    case $key4 : statistics();                            break;
    case "/admin" : panel();                              break;
    case $key_hmgani : key_hmgani();                      break;
    case $key_forvard : key_forvard();                    break;
    case $suppprt_result : suppprt_result();              break;
    case $add_Grafist : add_Grafist();                    break;
    case $add_seo : add_seo();                            break;
    case $add_oprator : add_oprator();                    break;
    case $Customer : Customer();                          break;
    case $negative : negative();                          break;
    case $Followup : Followup();                          break;
    case $Ordertracking : Ordertracking();                break;
    case $add_Contentproducer : add_Contentproducer();    break;
    case $back                 : back();                  break;
    case $akhraj                 : akhraj();              break;
    case $akhraj_mem                 : akhraj_mem();      break;
}
}

$sql_Seo    = "SELECT `id` FROM `SEOwork` WHERE `id`=$chat_id";
            $result_Seo = mysqli_query($conn,$sql_Seo);
            
            $res_Seo = mysqli_fetch_assoc($result_Seo);

if(isset($res_Seo['id'])){

    switch($text) {

        case $backOrdertrackingSeo : backOrdertrackingSeo();        break;
        case $Workstatistics : Workstatistics();                    break;
        case $send_Contentproducer : send_Contentproducer();        break;
        case $mazadKar : mazadKar();                                break;
        
        
    }
}

$sql_Oprator    = "SELECT `id` FROM `opator` WHERE `id`=$chat_id";
            $result_Oprator = mysqli_query($conn,$sql_Oprator);
            
            $res_Oprator = mysqli_fetch_assoc($result_Oprator);

if(isset($res_Oprator['id'])){

    switch($text) {

        case $backOrdertrackingOprator : backOrdertrackingOprator();        break;
        case $WorkstatisticsOprator : WorkstatisticsOprator();              break;
        
        
    }
}

$sql_grafist    = "SELECT `id` FROM `GraphicDesigner` WHERE `id`=$chat_id";
            $result_grafist = mysqli_query($conn,$sql_grafist);
            
            $res_grafist = mysqli_fetch_assoc($result_grafist);

if(isset($res_grafist['id'])){

    switch($text) {

        case $backOrdertrackingGrafist : backOrdertrackingGrafist();        break;
        case $WorkstatisticsGrafist : WorkstatisticsGrafist();              break;
        
        
    }
}

$sql_Contentproducer    = "SELECT `id` FROM `Contentproducer` WHERE `id`=$chat_id";
            $result_Contentproducer = mysqli_query($conn,$sql_Contentproducer);
            
            $res_Contentproducer = mysqli_fetch_assoc($result_Contentproducer);

if(isset($res_Contentproducer['id'])){

    switch($text) {

        case $backOrdertrackingContentproducer : backOrdertrackingContentproducer();        break;
        case $WorkstatisticsContentproducer : WorkstatisticsContentproducer();              break;
        
        
    }
}

function show_menu(){

    global $chat_id;
    global $conn;
    global $reply_kb_options;

    $sql    = "SELECT `id` FROM `Permission` WHERE `id`=$chat_id";
            $result = mysqli_query($conn,$sql);
            
            $res = mysqli_fetch_assoc($result);

if($chat_id == $res['id']){

    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👨‍💻 سلام مشتری گرامی به پنل خود خوش امدید",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options),
        ]);
}
}

function shopSeo(){
    
    global $chat_id;
    global $conn;
    global $reply_kb_options_finish;
    
    $sql_shopSeo4    = "SELECT `Permission` FROM `Permission` WHERE `id`=$chat_id";
    $result_shopSeo4 = mysqli_query($conn,$sql_shopSeo4);
    $res_shopSeo4 = mysqli_fetch_assoc($result_shopSeo4);
    $trsrul_shopSeo4 = $res_shopSeo4['Permission'];
    
    $sql_shopSeo    = "SELECT `id` FROM `Permission` WHERE `id`=$chat_id";
    $result_shopSeo = mysqli_query($conn,$sql_shopSeo);
    $res_shopSeo = mysqli_fetch_assoc($result_shopSeo);
    $trsrul_shopSeo = $res_shopSeo['id'];
    
    $sql_shopSeo2    = "SELECT `number` FROM `Permission` WHERE `id`=$chat_id";
    $result_shopSeo2 = mysqli_query($conn,$sql_shopSeo2);
    $res_shopSeo2 = mysqli_fetch_assoc($result_shopSeo2);
    $trsrul_shopSeo2 = $res_shopSeo2['number'];
    
    $sql_shopSeo3    = "SELECT `orders` FROM `users` WHERE `id`=$chat_id";
    $result_shopSeo3 = mysqli_query($conn,$sql_shopSeo3);
    $res_shopSeo3 = mysqli_fetch_assoc($result_shopSeo3);
    $trsrul_shopSeo3 = $res_shopSeo3['orders'];
    
    if($trsrul_shopSeo4 == 1 or $trsrul_shopSeo4 == 3){
    
    if(isset($trsrul_shopSeo) and $trsrul_shopSeo3 < $trsrul_shopSeo2){
        
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📝 متن خود را با عکس وارد کنید",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options_finish),
        ]);
        
        mysqli_query($conn,"UPDATE `users` SET `step`='shopSeo' WHERE `id`='$chat_id' LIMIT 1");
        exit();
    }
        else{
         bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ به سقف تعداد سفارش دادن رسیدید",
        'parse_mode'=>"HTML",
        ]);
    }
        
    }
    else{
         bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ شما دست رسی به این قسمت را ندارید",
        'parse_mode'=>"HTML",
        ]);
    }
    
}
function ShopLogo(){
    
    global $chat_id;
    global $conn;
    
    $sql_ShopLogo4    = "SELECT `Permission` FROM `Permission` WHERE `id`=$chat_id";
    $result_ShopLogo4 = mysqli_query($conn,$sql_ShopLogo4);
    $res_ShopLogo4 = mysqli_fetch_assoc($result_ShopLogo4);
    $trsrul_ShopLogo4 = $res_ShopLogo4['Permission'];
    
    $sql_ShopLogo    = "SELECT `id` FROM `Permission` WHERE `id`=$chat_id";
    $result_ShopLogo = mysqli_query($conn,$sql_ShopLogo);
    $res_ShopLogo = mysqli_fetch_assoc($result_ShopLogo);
    $trsrul_ShopLogo = $res_ShopLogo['id'];
    
    $sql_ShopLogo2    = "SELECT `numberG` FROM `Permission` WHERE `id`=$chat_id";
    $result_ShopLogo2 = mysqli_query($conn,$sql_ShopLogo2);
    $res_ShopLogo2 = mysqli_fetch_assoc($result_ShopLogo2);
    $trsrul_ShopLogo2 = $res_ShopLogo2['numberG'];
    
    $sql_ShopLogo3    = "SELECT `orders` FROM `users` WHERE `id`=$chat_id";
    $result_ShopLogo3 = mysqli_query($conn,$sql_ShopLogo3);
    $res_ShopLogo3 = mysqli_fetch_assoc($result_ShopLogo3);
    $trsrul_ShopLogo3 = $res_ShopLogo3['orders'];
    
    if($trsrul_ShopLogo4 == 5 or $trsrul_ShopLogo4 == 3){
    
    if(isset($trsrul_ShopLogo) and $trsrul_ShopLogo3 < $trsrul_ShopLogo2){
        
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📝 متن خود را وارد کنید",
        'parse_mode'=>"HTML",
        ]);
        
        mysqli_query($conn,"UPDATE `users` SET `step`='ShopLogo' WHERE `id`='$chat_id' LIMIT 1");
        exit();
    }
        else{
         bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ به سقف تعداد سفارش دادن رسیدید",
        'parse_mode'=>"HTML",
        ]);
    }
}
    else{
         bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ شما دست رسی ندارید",
        'parse_mode'=>"HTML",
        ]);
}
}
function ShopSite(){
    
    global $chat_id;
    global $conn;
    
$sql    = "SELECT `Permission` FROM `Permission` WHERE `id`=$chat_id";
$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_assoc($result);
$trsrul = $res['Permission'];

if($trsrul == 2 or $trsrul == 3){
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📝 نوشته خود را ارسال کنید",
        'parse_mode'=>"HTML",
        ]);
        mysqli_query($conn,"UPDATE `users` SET `step`='ShopSite' WHERE id='$chat_id' LIMIT 1");
}
else{
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❌ این قسمت برای شما باز نیست",
        'parse_mode'=>"HTML",
        ]);
}
    
}
function support(){
    
    global $chat_id;
    global $reply_kb_options_back;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='support' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📬 پیام خود را ارسال کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
}
function back(){
    
    global $chat_id;
    global $reply_kb_options_panel;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🔙 به منوی اصلی برگشتیم",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
}
function statistics(){

    global $chat_id;
    global $conn;
    
$sql    = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);
$res    = mysqli_num_rows($result);

$sql_orders    = "SELECT * FROM `orders`";
$result_orders = mysqli_query($conn,$sql_orders);
$res_orders    = mysqli_num_rows($result_orders);

$sql_SEOwork    = "SELECT * FROM `SEOwork`";
$result_SEOwork = mysqli_query($conn,$sql_SEOwork);
$res_SEOwork    = mysqli_num_rows($result_SEOwork);

$sql_Contentproducer    = "SELECT * FROM `Contentproducer`";
$result_Contentproducer = mysqli_query($conn,$sql_Contentproducer);
$res_Contentproducer    = mysqli_num_rows($result_Contentproducer);

$sql_GraphicDesigner    = "SELECT * FROM `GraphicDesigner`";
$result_GraphicDesigner = mysqli_query($conn,$sql_GraphicDesigner);
$res_GraphicDesigner    = mysqli_num_rows($result_GraphicDesigner);

$sql_opator    = "SELECT * FROM `opator`";
$result_opator = mysqli_query($conn,$sql_opator);
$res_opator    = mysqli_num_rows($result_opator);

$sql_Permission    = "SELECT * FROM `Permission`";
$result_Permission = mysqli_query($conn,$sql_Permission);
$res_Permission    = mysqli_num_rows($result_Permission);

$sql_Condition    = "SELECT * FROM `orders` WHERE `Condition`='ok'";
$result_Condition = mysqli_query($conn,$sql_Condition);
$res_Condition    = mysqli_num_rows($result_Condition);

$sql_ssss    = "SELECT * FROM `orders` WHERE `Condition`='doing'";
$result_ssss = mysqli_query($conn,$sql_ssss);
$res_ssss    = mysqli_num_rows($result_ssss);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 امار ربات شما",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"📊 امار کاربران",'callback_data'=>"ssss"],
    ['text'=>"$res",'callback_data'=>"ssss"],
],
[
    ['text'=>"📊 امار سفارشات",'callback_data'=>"ssss"],
    ['text'=>"$res_orders",'callback_data'=>"ssss"],
],
[
    ['text'=>"📊 امار سئو کار ها",'callback_data'=>"ssss"],
    ['text'=>"$res_SEOwork",'callback_data'=>"ssss"],
],
[
    ['text'=>"📊 امار مدیریت محتوا ها",'callback_data'=>"ssss"],
    ['text'=>"$res_Contentproducer",'callback_data'=>"ssss"],
],
[
    ['text'=>"📊 امار گرافیست ها",'callback_data'=>"ssss"],
    ['text'=>"$res_GraphicDesigner",'callback_data'=>"ssss"],
],
[
    ['text'=>"📊 امار اپراتور ها",'callback_data'=>"ssss"],
    ['text'=>"$res_opator",'callback_data'=>"ssss"],
],
[
    ['text'=>"📊 امار مشتری ها",'callback_data'=>"ssss"],
    ['text'=>"$res_Permission",'callback_data'=>"ssss"],
],
[
    ['text'=>"📊 امار سفارشات تکمیل شده",'callback_data'=>"ssss"],
    ['text'=>"$res_Condition",'callback_data'=>"ssss"],
],
[
    ['text'=>"📊 امار سفارشات در حال انجام",'callback_data'=>"ssss"],
    ['text'=>"$res_ssss",'callback_data'=>"ssss"],
],
]
])
]);
}
function panel(){

    global $reply_kb_options_panel;
    global $admin;

bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"👨‍💻 به پنل مدیریت خوش امدید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_panel),
]);
}
function key_hmgani(){

    global $chat_id;
    global $conn;
    global $reply_kb_options_back;
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📝 پیام خود را بنویسید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='key_hmgani' WHERE id=$chat_id LIMIT 1");
}
function key_forvard(){

    global $chat_id;
    global $conn;
    global $reply_kb_options_back;
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📝 پیام خود را فوروارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);

mysqli_query($conn,"UPDATE `users` SET `step`='key_forvard' WHERE id=$chat_id LIMIT 1");
}
function suppprt_result(){

    global $chat_id;
    global $reply_kb_options_back;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='suppprt_result' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 کاربری که میخای براش پیام بفرستی پیام را به صورت زیر بنویس
id,message",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
}
function add_Grafist(){

    global $chat_id;
    global $reply_kb_options_back;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='add_Grafist' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ایدی عددی گرافیست و دست مزد ان را به صورت زیر وارد کنید

id,dastmozd",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
}
function add_seo(){

    global $chat_id;
    global $reply_kb_options_back;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='add_seo' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 اطلاعات سئو کار را به شکل زیر بنویسید

id,modir,dastmozd

id : ایدی عددی سئو کار
modir : ایدی عددی مدیر محتوا
dastmozd : دست مزد به تومان",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
}
function add_oprator(){

    global $chat_id;
    global $reply_kb_options_back;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='add_oprator' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻 ایدی عددی اپراتور و میزان حقوق ان را ارسال فرمایید به صورت زیر

id,dastmozd",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
}
function Customer(){
    
    global $chat_id;
    global $reply_kb_options_back;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='Customer' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻 توضیحات اضافه کردن مشتری

ادمین گرامی برای اضافه کردن مشتری از دستور زیر استفاده کنید 👇

id,number 

id : ایدی عددی کاربر
numbder : شماره دست رسی

📝 شماره های دست رسی :

1 : دست رسی به سئو کار
2 : دست رسی به اپراتور 
3 : دست رسی به گرافیست
4 : دست رسی به همه",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
}
function negative(){
    
    global $chat_id;
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻 شغل مورد نظر خود را برای صفر کردن موجودی کارمندش انتخاب کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👨‍💻 سئو کار ها",'callback_data'=>"seoManfi"]
],
[
    ['text'=>"👨‍💻 گرافیست ها",'callback_data'=>"graficManfi"]
],
[
    ['text'=>"👨‍💻 اپراتور ها",'callback_data'=>"OpratorManfi"]
],
[
    ['text'=>"👨‍💻 تولید کننده محتوا ها",'callback_data'=>"mediaManfi"]
],
]
])
]);
}
function Followup(){
    
    global $chat_id;
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻 شغل مورد نظر برای پیگیری کارمند ان را انتخاب کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👨‍💻 سئو کار ها",'callback_data'=>"seo"]
],
[
    ['text'=>"👨‍💻 گرافیست ها",'callback_data'=>"grafic"]
],
[
    ['text'=>"👨‍💻 اپراتور ها",'callback_data'=>"oprator"]
],
[
    ['text'=>"👨‍💻 تولید کننده محتوا ها",'callback_data'=>"media"]
],
]
])
]);
}
function Ordertracking(){
    
    global $chat_id;
    global $reply_kb_options_back;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='Ordertracking' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🏷 کد پیگیری سفارش را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
}
function add_Contentproducer(){

    global $chat_id;
    global $reply_kb_options_back;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='add_Con' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻 ایدی عددی مدیر محتوا و میزان حقوق ان را ارسال فرمایید به صورت زیر

id,dastmozd",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),
]);
}
function Workstatistics(){
    
    global $conn;
    global $chat_id;
    
    $sql_jobdone    = "SELECT `jobdone` FROM `SEOwork` WHERE `id`=$chat_id";
    $result_jobdone = mysqli_query($conn,$sql_jobdone);
    $res_jobdone = mysqli_fetch_assoc($result_jobdone);
    $trsrul_jobdone = $res_jobdone['jobdone'];
    
    $sql_coin    = "SELECT `coin` FROM `SEOwork` WHERE `id`=$chat_id";
    $result_coin = mysqli_query($conn,$sql_coin);
    $res_coin = mysqli_fetch_assoc($result_coin);
    $trsrul_coin = $res_coin['coin'];
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻 امار حساب شما",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"💳 درامد شما",'callback_data'=>"sss"],
    ['text'=>"$trsrul_coin",'callback_data'=>"sss"]
],
[
    ['text'=>"👨‍💻 تعداد پروژه های انجام شده",'callback_data'=>"sss"],
    ['text'=>"$trsrul_jobdone",'callback_data'=>"sss"]
],
]
])
]);
}
function backOrdertrackingSeo(){
    
    global $chat_id;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='backOrde' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🏷 کد پیگیری سفارش را وارد کنید",
'parse_mode'=>"HTML",
]);
    
}
function backOrdertrackingGrafist(){
    
    global $chat_id;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='backOrdertrackingGrafist' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🏷 کد پیگیری سفارش را وارد کنید",
'parse_mode'=>"HTML",
]);
}
function WorkstatisticsGrafist(){
    
    global $conn;
    global $chat_id;
    
    $sql_jobdone    = "SELECT `jobdone` FROM `GraphicDesigner` WHERE `id`=$chat_id";
    $result_jobdone = mysqli_query($conn,$sql_jobdone);
    $res_jobdone = mysqli_fetch_assoc($result_jobdone);
    $trsrul_jobdone = $res_jobdone['jobdone'];
    
    $sql_coin    = "SELECT `coin` FROM `GraphicDesigner` WHERE `id`=$chat_id";
    $result_coin = mysqli_query($conn,$sql_coin);
    $res_coin = mysqli_fetch_assoc($result_coin);
    $trsrul_coin = $res_coin['coin'];
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻 امار حساب شما",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"💳 درامد شما",'callback_data'=>"sss"],
    ['text'=>"$trsrul_coin",'callback_data'=>"sss"]
],
[
    ['text'=>"👨‍💻 تعداد پروژه های انجام شده",'callback_data'=>"sss"],
    ['text'=>"$trsrul_jobdone",'callback_data'=>"sss"]
],
]
])
]);
}
function backOrdertrackingOprator(){
    
    global $chat_id;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='backOrdertr' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🏷 کد پیگیری سفارش را وارد کنید",
'parse_mode'=>"HTML",
]);
}
function WorkstatisticsOprator(){
    
    global $conn;
    global $chat_id;
    
    $sql_jobdone    = "SELECT `jobdone` FROM `opator` WHERE `id`=$chat_id";
    $result_jobdone = mysqli_query($conn,$sql_jobdone);
    $res_jobdone = mysqli_fetch_assoc($result_jobdone);
    $trsrul_jobdone = $res_jobdone['jobdone'];
    
    $sql_coin    = "SELECT `coin` FROM `opator` WHERE `id`=$chat_id";
    $result_coin = mysqli_query($conn,$sql_coin);
    $res_coin = mysqli_fetch_assoc($result_coin);
    $trsrul_coin = $res_coin['coin'];
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻 امار حساب شما",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"💳 درامد شما",'callback_data'=>"sss"],
    ['text'=>"$trsrul_coin",'callback_data'=>"sss"]
],
[
    ['text'=>"👨‍💻 تعداد پروژه های انجام شده",'callback_data'=>"sss"],
    ['text'=>"$trsrul_jobdone",'callback_data'=>"sss"]
],
]
])
]);
}
function backOrdertrackingContentproducer(){
    
    global $chat_id;
    global $conn;
    
    mysqli_query($conn,"UPDATE `users` SET `step`='backOrderthhh' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🏷 کد پیگیری سفارش را وارد کنید",
'parse_mode'=>"HTML",
]);
}
function WorkstatisticsContentproducer(){
    
    global $conn;
    global $chat_id;
    
    $sql_jobdone    = "SELECT `jobdone` FROM `Contentproducer` WHERE `id`=$chat_id";
    $result_jobdone = mysqli_query($conn,$sql_jobdone);
    $res_jobdone = mysqli_fetch_assoc($result_jobdone);
    $trsrul_jobdone = $res_jobdone['jobdone'];
    
    $sql_coin    = "SELECT `coin` FROM `Contentproducer` WHERE `id`=$chat_id";
    $result_coin = mysqli_query($conn,$sql_coin);
    $res_coin = mysqli_fetch_assoc($result_coin);
    $trsrul_coin = $res_coin['coin'];
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻 امار حساب شما",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"💳 درامد شما",'callback_data'=>"sss"],
    ['text'=>"$trsrul_coin",'callback_data'=>"sss"]
],
[
    ['text'=>"👨‍💻 تعداد پروژه های انجام شده",'callback_data'=>"sss"],
    ['text'=>"$trsrul_jobdone",'callback_data'=>"sss"]
],
]
])
]);
}

function send_Contentproducer(){
    
    global $chat_id;
    global $conn;
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📝 پیام خود را بنویسید",
'parse_mode'=>"HTML",
]);

mysqli_query($conn,"UPDATE `users` SET `step`='Contentp' WHERE id='$chat_id' LIMIT 1");
}

function akhraj(){
    
    global $chat_id;
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻 گروه مدنظر خودتونو انتخاب کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"👨‍💻 سئوکار",'callback_data'=>"akhrajSeo"]
],
[
    ['text'=>"👨‍💻 گرافیست",'callback_data'=>"akhrajGrafic"]
],
[
    ['text'=>"👨‍💻 مدیریت محتوا",'callback_data'=>"akhrajCo"]
],
[
    ['text'=>"👨‍💻 اپراتور",'callback_data'=>"akhrajOPrator"]
],
]
])
]);
}

function akhraj_mem(){
    
    global $chat_id;
    global $conn;
    global $reply_kb_options_back;
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤 ایدی عددی مشتری را وارد کنید",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode($reply_kb_options_back),

]);
    
mysqli_query($conn,"UPDATE `users` SET `step`='akhraj_mem' WHERE id='$chat_id' LIMIT 1");
}

function mazadKar(){
    
    global $chat_id;
    global $conn;
    
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻سلام سئو کار عزیز این بخش برای ارائه پروژه ای هستش که شما خودتون برای یکی دیگه انجام داده اید طراحی شده لطفا طبق دستور العمل زیر توضیحات را ارسال کنید

time,text

text : توضیحات
time : زمان پروژه به دقیقه",
'parse_mode'=>"HTML",

]);
mysqli_query($conn,"UPDATE `users` SET `step`='mazadKar' WHERE id='$chat_id' LIMIT 1");
}

function finish(){
    
    global $chat_id;
    global $conn;
    global $reply_kb_options;
    
    $sql_orders    = "SELECT * FROM `orders`";
$result_orders = mysqli_query($conn,$sql_orders);
$res_orders    = mysqli_num_rows($result_orders);

$olders = $res_orders + 1;

$sql_seok         = "SELECT `seo` FROM `users` WHERE id='$chat_id'";
$result_seok = mysqli_query($conn,$sql_seok);
$res_seok    = mysqli_fetch_assoc($result_seok);
$res_se = $res_seok['seo'];


$sql222    = "INSERT INTO `orders` (`id`, `Manufacturer`, `type`, `date`, `functor`, `Condition`) VALUES ($olders, $chat_id, 'seo', '0', $res_se, 'doing')";
$result2222 = mysqli_query($conn,$sql222);

$sql_f         = "SELECT `orders` FROM `users` WHERE `id`=$chat_id";
$result_f = mysqli_query($conn,$sql_f);
$res_f    = mysqli_fetch_assoc($result_f);

$ok = $res_f['orders'] + 1;

mysqli_query($conn,"UPDATE users SET orders='$ok' WHERE id='$chat_id' LIMIT 1");
    
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"✅ سفارش شما ثبت شد",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode($reply_kb_options),
        ]);
        
        bot('sendMessage',[
        'chat_id'=>$res_se,
        'text'=>"✅ #سفارش_جدید

👨‍💻 نوع سفارش : سئو
👤 ارسال کننده : $chat_id
🏷 کد محصول : $olders",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
    ['text'=>"✅ تکمیل کردن پروژه",'callback_data'=>"seoProct"]
],
]
])
]);
    
mysqli_query($conn,"UPDATE `users` SET `step`='none' WHERE id='$chat_id' LIMIT 1");
}
?>