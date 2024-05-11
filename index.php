<?php 
#@Viscobt1
#@musicalgeria
#@FROM_PHP
ob_start();

$API_KEY = '7137946160:AAEtkKjWlJ-Pex9OsdoO9UnScTqabt88ss8';
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
	function Forward($KojaShe,$AzKoja,$KodomMSG)
{
    bot('ForwardMessage',[
        'chat_id'=>$KojaShe,
        'from_chat_id'=>$AzKoja,
        'message_id'=>$KodomMSG
    ]);
}
function sendphoto($chat_id, $photo, $action){
	bot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'action'=>$action
	]);
	}
	function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
    
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chj = "bi_ek0";//معرف قناتك بدون @
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$fn = $message->from->first_name;
$user = $message->from->username;
$st = str_replace("@","", $chj);
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chj&user_id=".$from_id);
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$name = $message->from->first_name;
$update = json_decode(file_get_contents('php://input'));
$admin = 7013440973;//ايديك
mkdir("AllMedia");
$Dyler = file_get_contents("Dyler.txt");
$Dyler0 = file_get_contents("Dyler0.txt");
$Dyler1= file_get_contents("Dyler1.txt");
$Dyler5 = file_get_contents("Dyler2.txt");
$Dyler6 = file_get_contents("Dyler3.txt");
$Dyler20 = json_decode(file_get_contents('php://input'));
$Dyler18 = $update->message;
$Dyler13 = $Dyler18->chat->id;
$Dyler17 = $Dyler18->text;
$meme = $Dyler20->callback_query->data;
$Dyler12 = $Dyler20->callback_query->message->chat->id;
$Dyler14 =  $Dyler20->callback_query->message->message_id;
$Dyler15 = $Dyler18->from->first_name;
$Dyler30 = $Dyler20->callback_query->from->first_name; 
$Dyler16 = $Dyler18->from->username;
$Dyler11 = $Dyler18->from->id;
$Dyler2 = explode("\n",file_get_contents("Dyler4.txt"));
$Dyler3 = count($Dyler2)-1;
$DylercH = file_get_contents("ch.txt");
$DylercH1 = explode("\n", $DylercH);
$DylercH = count($DylercH1) - 1;
if($Dyler18 && !in_array($Dyler11, $Dyler2)) {
    file_put_contents("Dyler4.txt", $Dyler11."\n",FILE_APPEND);
  }
$Dyler9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$Dyler0&user_id=".$Dyler11);
$Dyler10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$Dyler1&user_id=".$Dyler11);
if($Dyler18 && (strpos($Dyler9,'"status":"left"') or strpos($Dyler9,'"Bad Request: USER_ID_INVALID"') or strpos($Dyler9,'"status":"kicked"') or strpos($Dyler10,'"status":"left"') or strpos($Dyler10,'"Bad Request: USER_ID_INVALID"') or strpos($Dyler10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$Dyler13,
'text'=>"*⌯ اشترك في القنوات لتتمكن من استعمال البوت : -*
*⌯ القناة الأولى ~* $Dyler0 
*⌯ القناة الثانية ~* $Dyler1",'parse_mode' =>"markdown", 
]);return false;}
if($Dyler17 == "/admin" and $Dyler11 == $admin){
bot("sendmessage",[
"chat_id"=>$Dyler13,
"text"=>"*━━━━━━━━━━━━━━━━━━━━━━━
                   『 موهان & IQ 』
━━━━━━━━━━━━━━━━━━━━━━━
هلا بك عزيزي في افضل بوت ويب هوك يمكنك التحكم في البوت من خلال الازرار
━━━━━━━━━━━━━━━━━━━━━━━
قناة التحديثات ~ @bi_ek0
المطور ~ @XX44G
━━━━━━━━━━━━━━━━━━━━━━━*",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⌯ اوامر القناة الأولى" ,'callback_data'=>"a"]],
[['text'=>"⌯ وضع قناة عامة" ,'callback_data'=>"Dyler0"],['text'=>"⌯ حذف قناة عامة"  ,'callback_data'=>"delete11"]],
[['text'=>"⌯ اوامر القناة الثانية" ,'callback_data'=>"s"]],
[['text'=>"⌯ وضع قناة عامة" ,'callback_data'=>"Dyler2"],['text'=>"⌯ حذف قناة ثانية" ,'callback_data'=>"delete22"]],
[['text'=>"⌯ عرض قنوات الاشتراك" ,'callback_data'=>"Dyler4"]],
[['text'=>"⌯ عرض اوامر الاذاعة" ,'callback_data'=>"DyleriD"]],
[['text'=>"⌯ اوامر تنبيه دخول المشتركين",'callback_data'=>"d"]],
[['text'=>"⌯ تفعيل التنبيه" ,'callback_data'=>"Dyler9"],['text'=>"⌯ تعطيل التنبيه" ,'callback_data'=>"Dyler10"]],
[['text'=>"⌯ اوامر التواصل" ,'callback_data'=>"f"]],
[['text'=>"⌯ تفعيل التواصل" ,'callback_data'=>"Dyler11"],['text'=>"⌯ تعطيل التواصل" ,'callback_data'=>"Dyler12"]],
   ] 
   ])
]);
}
if($meme == "Dyler" ){
bot('EditMessageText',[
'chat_id'=>$Dyler12,
'message_id'=>$Dyler14,
"text"=>"*━━━━━━━━━━━━━━━━━━━━━━━
                   『 موهان & IQ 』
━━━━━━━━━━━━━━━━━━━━━━━
هلا بك عزيزي في افضل بوت ويب هوك يمكنك التحكم في البوت من خلال الازرار 
━━━━━━━━━━━━━━━━━━━━━━━
قناة التحديثات ~ @FROM_PHP
المطور ~ @XX44G
━━━━━━━━━━━━━━━━━━━━━━━*", 
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⌯ اوامر القناة الأولى" ,'callback_data'=>"a"]],
[['text'=>"⌯ وضع قناة عامة" ,'callback_data'=>"Dyler0"],['text'=>"⌯ حذف قناة عامة"  ,'callback_data'=>"delete11"]],
[['text'=>"⌯ اوامر القناة الثانية" ,'callback_data'=>"s"]],
[['text'=>"⌯ وضع قناة ثانية" ,'callback_data'=>"Dyler2"],['text'=>"⌯ حذف قناة ثانية" ,'callback_data'=>"delete22"]],
[['text'=>"⌯ عرض قنوات الاشتراك" ,'callback_data'=>"Dyler4"]],
[['text'=>"⌯ عرض اوامر الاذاعة" ,'callback_data'=>"DyleriD"]],
[['text'=>"⌯ اوامر تنبيه دخول المشتركين",'callback_data'=>"d"]],
[['text'=>"⌯ تفعيل التنبيه" ,'callback_data'=>"Dyler9"],['text'=>"⌯ تعطيل التنبيه" ,'callback_data'=>"Dyler10"]],
[['text'=>"⌯ اوامر التواصل" ,'callback_data'=>"f"]],
[['text'=>"⌯ تفعيل التواصل" ,'callback_data'=>"Dyler11"],['text'=>"⌯ تعطيل التواصل" ,'callback_data'=>"Dyler12"]],
   ] 
   ])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler0"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 
#مثال :*
▪️@musicalgerian",'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler0");
}
if($Dyler17 and $Dyler == "Dyler0" and $Dyler11 == $admin){
bot("sendmessage",[
"chat_id"=>$Dyler13,
"text"=>"*⌯ تم وضع قناتك للاشتراك الاجباري
⌯ قناتك *~ $text
*⌯ قم برفعي مشرفاً فيها *",'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler0.txt","$Dyler17");
unlink("Dyler.txt");
}
if($meme == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ هل انت متأكد من حذف قناتك ~* $Dyler0",'parse_mode' =>"markdown", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"⌯ لا",'callback_data'=>'Dyler'],
['text'=>"⌯ نعم",'callback_data'=>'Dyler1'],
]    
]])
]);    
}
if($meme == "Dyler1"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ تم حذف القناة الأولى ( $Dyler0 ) من الاشتراك الإجباري *", 'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>"⌯ Back" ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler0.txt");
}
if($meme == "Dyler2"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 
#مثال :*
▪️@FROM_PHP", 'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler1");
}
if($Dyler17 and $Dyler == "Dyler1" and $Dyler11 == $admin){
bot("sendmessage",[
"chat_id"=>$Dyler13,
"text"=>"*⌯ تم وضع قناتك للاشتراك الاجباري
⌯ قناتك *~ $text
*⌯ قم برفعي مشرفاً فيها *",'parse_mode' =>"markdown",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler1.txt","$Dyler17");
unlink("Dyler.txt");
}
if($meme == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ هل انت متأكد من حذف قناتك ~* $Dyler1", 'parse_mode' =>"markdown", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"⌯ لا", 'callback_data'=>'Dyler'],
['text'=>"⌯ نعم",'callback_data'=>'Dyler3'],
]    
]])
]);    
}
if($meme == "Dyler3"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ تم حذف القناة الثانية ( $Dyler1 ) من الاشتراك الإجباري*", 'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler1.txt");
}
if($meme == "DyleriD"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ اختر نوع التوجيه الذي يناسبك من اسفل *", 'parse_mode' =>"markdown", 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⌯ عدد المشتركين",'callback_data'=>"Dyler7"]],
[['text'=>"⌯ اذاعة خاص توجيه" ,'callback_data'=>"Dyler5"],['text'=>"⌯ اذاعة خاص رسالة"  ,'callback_data'=>"Dyler6"]],
[['text'=>"⌯ عدد القنوات ⌯" ,'callback_data'=>"couch"]],
[['text'=>"⌯ اذاعة قناة توجيه" ,'callback_data'=>"DylercH"],['text'=>"⌯ اذاعة قناة رسالة"  ,'callback_data'=>"DylercH1"]],
[['text'=>"⌯ رجوع" ,'callback_data'=>"Dyler"]],

]]) 
]);
} 

if($meme == "couch"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ ~ عدد القنوات هي [ $DylercH ] قناة*",'parse_mode' =>"markdown",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
}

if($meme == "DylercH1"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ ~ أرسل رسالتك وسيتم ارسالها لـ [ $DylercH ] قناة*",'parse_mode' =>"markdown",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","DylercH1");
}
if($Dyler18 and $Dyler == "DylercH1" and $Dyler11 == $admin){
bot("sendmessage",[
"chat_id"=>$Dyler13,
'text' =>"*⌯ تم ارسال رسالتك لـ $DylercH قناة*",'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($DylercH1); $i++){
bot('sendMessage', [
'chat_id'=>$DylercH1[$i],
'text'=>$text,
]);
unlink("Dyler.txt");
}
}


if($meme == "DylercH"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ ~ أرسل رسالتك وسيتم توجيهها لـ [ $DylercH ] قناة*",'parse_mode' =>"markdown",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","DylercH");
}
if($Dyler18 and $Dyler == "DylercH" and $Dyler11 == $admin){
bot("sendmessage",[
"chat_id"=>$Dyler13,
'text' =>"*⌯ تم توجيه رسالتك لـ $DylercH قناة*",'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($DylercH1); $i++){
bot('forwardMessage', [
'chat_id'=>$DylercH1[$i],
'from_chat_id'=>$Dyler11,
'message_id'=>$Dyler18->message_id
]);
unlink("Dyler.txt");
}
}

if($meme == "Dyler4"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯  هذه هي قائمة قنوات الأشتراك الاجباري ،
⌯ القناة الاولى ،  $Dyler0
⌯ القناة الثانية ،  $Dyler1*",'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler5"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ ~ أرسل رسالتك وسيتم توجيهها لـ [ $Dyler3 ] مشترك*",'parse_mode' =>"markdown",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler2");
}
if($Dyler18 and $Dyler == "Dyler2" and $Dyler11 == $admin){
bot("sendmessage",[
"chat_id"=>$Dyler13,
'text' =>"*⌯ تم توجيه رسالتك لـ $Dyler3 مشترك*",'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($Dyler2); $i++){
bot('forwardMessage', [
'chat_id'=>$Dyler2[$i],
'from_chat_id'=>$Dyler11,
'message_id'=>$Dyler18->message_id
]);
unlink("Dyler.txt");
}
}
if($meme == "Dyler6"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ ارسل رسالتك ليتم نشرها لـ $Dyler3 مشترك*",'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler3");
}
if($Dyler17 and $Dyler == "Dyler3" and $Dyler11 == $admin){
bot("sendmessage",[
"chat_id"=>$Dyler13,
"text"=>"*⌯ تم نشر رسالتك لـ $Dyler3 مشترك*",'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<1000; $i++){
bot('sendMessage', [
'chat_id'=>$Dyler2[$i],
'text'=>$Dyler17
]);
unlink("Dyler.txt");
}
}


if($meme == "Dyler7"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ عدد مشتركين البوت هو ~ $Dyler3 مشتركاً*",'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back",'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler9"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ تم تفعيل اشعار الدخول*", 'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back" ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler2.txt","Dyler");
}
if($Dyler17 == "/start" and $Dyler5 == "Dyler" and $Dyler11 != $admin and $Dyler16 != null){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"*⌯  عضو جديد قام بالدخول الى البوت*
*⌯  الاسم ~ *[$Dyler15](tg://user?id=$from_id) 
*⌯ المعرف ~ *[@$Dyler16](tg://user?id=$from_id) 
*⌯ الايدي ~ *[$Dyler11](tg://user?id=$from_id) 
*⌯ اصبح عدد المشتركين ~ { $Dyler3 }*",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}elseif($Dyler17 == "/start" and $Dyler5 == "Dyler" and $Dyler11 != $admin and $Dyler16 == null){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"*⌯  عضو جديد قام بالدخول الى البوت*
*⌯  الاسم ~ *[$Dyler15](tg://user?id=$from_id) 
*⌯ المعرف ~ *[لايمتلك معرف](tg://user?id=$from_id) 
*⌯ الايدي ~ *[$Dyler11](tg://user?id=$from_id) 
*⌯ اصبح عدد المشتركين ~ { $Dyler3 }*",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}


if($meme == "Dyler10"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ تم تعطيل اشعار الدخول*" ,'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back" ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler2.txt");
}
if($meme == "Dyler11"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ تم تفعيل التواصل*", 'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back" ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler3.txt","Dyler");
}
if($Dyler18 and $Dyler6 == "Dyler" and $Dyler11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$Dyler11,
'message_id'=>$Dyler18->message_id
]);
}
if($Dyler18 and $Dyler6 == "Dyler" and $Dyler11 == $admin){
bot('sendMessage',[
'chat_id'=>$Dyler18->reply_to_message->forward_from->id,
    'text'=>$Dyler17,
    ]);
}
if($meme == "Dyler12"){
bot('EditMessageText',[
    'chat_id'=>$Dyler12,
    'message_id'=>$Dyler14,
'text'=>"*⌯ تم تعطيل التواصل*", 'parse_mode' =>"markdown", 
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>"⌯ Back" ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler3.txt");
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
mkdir("data/$from_id");
$message_id = $message->message_id;
$from_id = $message->from->id;
$text = $message->text;
$ali = file_get_contents("data/$from_id/kro_iraq");
$ADMIN = 6856948123;
$to =  file_get_contents("data/$from_id/token.txt");
$url =  file_get_contents("data/$from_id/url.txt");
if($text == "/start"){
    if (!file_exists("data/$from_id/kro_iraq")) {
        mkdir("data/$from_id");
        file_put_contents("data/$from_id/kro_iraq","none");
        $myfile2 = fopen("Member.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
    }
    
    sendAction($chat_id, 'typing');
    bot('sendPhoto',[
        'chat_id'=>$chat_id,
        'photo'=>"Https://viscovbt.alwaysdata.net/Webhook/ty.jpg",
        'caption'=>"*
━━━━━━━━━━━━━━━━━━━━━━━
                   『 موهان & IQ 』
━━━━━━━━━━━━━━━━━━━━━━━
هلا بك عزيزي في افضل بوت ويب هوك يمكنك التحكم في البوت من خلال الازرار 
━━━━━━━━━━━━━━━━━━━━━━━
قناة التحديثات ~ @bi_ek0
المطور ~ @XX44G
━━━━━━━━━━━━━━━━━━━━━━━
*",
        'parse_mode'=>'MarkDown',
        'reply_markup'=>json_encode([
            'resize_keyboard'=>true,
            'keyboard'=>[
                [['text'=>"عمل ويب هوك ✅"],
                ['text'=>"حذف ويب هوك ❌"]],
                [['text'=>"معلومات التوكن 🔎"]],
                [['text'=>"قياس السرعة ⚡"]],
            ],
        ]),
    ]);
}
if($update){
bot("setMyCommands",[
    "commands"=>json_encode([
        ['command'=>"start",'description'=>'رسالة البدء'],
      ['command'=>"speed",'description'=>'قياس السرعة ⚡'],
        ])
    ]); 
}
$from_id    = $message->from->id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
if($message){
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
$msgmemo = $msgs['msgs'][$chat_id]
[$from_id];
$user = $message->from->username; 
$sudo= 7013440973;
#@Viscobt1
#@musicalgeria
#@FROM_PHP
if ($text == "قياس السرعة ⚡") {
$b=bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "تم البدء بقياس السرعه ✅",
        'parse_mode' => "Markdown",
    ]);
    sleep(0.9);
    
    $userb = strtoupper($userbot);

    $start_time = microtime(true);

    
        
    
    for ($i = 0; $i < 11; $i++) {
        bot("editMessageText", [
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id,
            "text" => "
            *
            ♻️ يتم قياس السرعه انتظر قليلا...
            " . $i * 10 . "%
            *
            ",
            "parse_mode" => "Markdown",
        ]);
    }

    $end_time = microtime(true);
    if ($i >= 10) {
        bot("editMessageText", [
            "chat_id" => $chat_id,
            'message_id' =>  $b->result->message_id,
            "text" => "
            *
            ✨ تم الانتهاء من قياس السرعه ✓
            *
            ",
            "parse_mode" => "Markdown",
            
        ]);
        sleep(1);
    }
    $time = $end_time - $start_time;
    $time = number_format($time, 4, '.', '');
    if ($time <= 1.5) {
        $x = "قوي 💯";
    }
    if ($time <= 3 && $execution_time > 1.5) {
        $x = "لا بأس 🧸";
    }
    if ($time > 3) {
        $x = "ضعيفة ❌";
    }

    bot("editMessageText", [
        "chat_id" => $chat_id,
        'message_id' =>  $b->result->message_id,
        'text' => "
        ✬ سرعة البوت ⋙ $time 
        $x
        ",
        'parse_mode' => "Markdown",
    ]);
}
elseif($text == "↪️ القائمة الرئيسية"){
file_put_contents("data/$from_id/kro_iraq","no");
file_put_contents("data/$from_id/token.txt","no");
file_put_contents("data/$from_id/url.txt","no");
        sendAction($chat_id, 'typing');
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"تم الرجوع الئ القائمة الرئيسية",
        'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"عمل ويب هوك ✅"],
	['text'=>"حذف ويب هوك ❌"]],
	[['text'=>"معلومات التوكن 🔎"]],
	[['text'=>"قياس السرعة ⚡"]],
	]
	])
	]);
	}
elseif($text == "عمل ويب هوك ✅"){
     sendAction($chat_id, 'typing');
			file_put_contents("data/$from_id/kro_iraq","to");
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"قم بارسال التوكن✅",
                 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"↪️ القائمة الرئيسية"]
	],
	]
	])
	]);
	}
	#@Viscobt1
#@musicalgeria
#@FROM_PHP
elseif($ali == "to"){
$token = $text;

    $ali1 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getwebhookinfo"));
    $ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getme"));
    $tik2 = objectToArrays($ali1);
    $ur = $tik2["result"]["url"];
    $ok2 = $tik2["ok"];
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
    if ($ok != 1) {
        SendMessage($chat_id, "");
    } else{
    file_put_contents("data/$from_id/kro_iraq","url");
    file_put_contents("data/$from_id/token.txt",$text);
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"قم بارسال رابط الملف✅",
  ]);
}
}
elseif($ali == "url"){
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$text))
  {
  SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"رابط الملف خطا❌",
  ]);
 }
 else {
 file_put_contents("data/$from_id/kro_iraq","no");
 file_put_contents("data/$from_id/url.txt",$text);
 	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"انتظر يتم تحميل البيانات ...",
  ]);
  sleep(1);
   	bot('editmessagetext',[
    'chat_id'=>$chat_id,
        'message_id'=>$message_id + 1,
    'text'=>"انتظر يتم تحميل البيانات ...",
  ]);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
    'text'=>"*
━━━━━━━━━━━━━━━━━━━━━━━
                   『 موهان & BR 』
━━━━━━━━━━━━━━━━━━━━━━━
🇮🇶 مرحبا بك 
🧾 توكنك :
 $to

📝 مسار ملفك :
 $text

اضغط /visco للتاكيد
━━━━━━━━━━━━━━━━━━━━━━━
",
  ]);
 }
}
elseif($text == "/visco" ){
if($to != "no"){
 	 	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"انتظر يتم تحميل البيانات ...",
  ]);
  sleep(1);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
      'text'=>"انتظر يتم تحميل البيانات ...",
  ]);
  file_get_contents("https://api.telegram.org/bot$to/setwebhook?url=$url");
    sleep(1);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
      'text'=>"انتظر يتم تحميل البيانات ...",
  ]);
  sleep(1);
  file_put_contents("data/$from_id/kro_iraq","no");
	bot('sendmessage',[
	'chat_id'=>$chat_id,
		    'message_id'=>$message_id + 1,
	'text'=>"تم عمل ويب هوك بنجاح✅",
        'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"عمل ويب هوك ✅"],['text'=>"معلومات التوكن 🔎"]],
	[['text'=>"حذف ويب هوك ❌"]],
	 [['text'=>'↪️ القائمة الرئيسية']]
	]
	])
	]);
}

}
#@Viscobt1
#@musicalgeria
#@FROM_PHP
elseif($text == "معلومات التوكن 🔎" ){
    file_put_contents("data/$from_id/kro_iraq","token");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"قم بارسال التوكن✅",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'↪️ القائمة الرئيسية']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "token"){
$token = $text;

    $ali1 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getwebhookinfo"));
    $ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getme"));
    $tik2 = objectToArrays($ali1);
    $ur = $tik2["result"]["url"];
    $ok2 = $tik2["ok"];
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
    if ($ok != 1) {
        SendMessage($chat_id, "التوكن خطا❌");
    } else{
    file_put_contents("data/$from_id/kro_iraw","no");
    
	SendAction($chat_id,'typing');
 	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"انتظر يتم تحميل البيانات ...",
  ]);
  sleep(1);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
    'text'=>"
📝 مـعـلـومـات الـتـوكـن هـي :
• مـعـرف الـبـوت
- @$un 
• ايـدي الـبـوت
- $id
• اسـم الـبـوت
- $fr
• رابـط الـمـلـف
- $ur
",
  ]);
}
}
elseif($text == "حذف ويب هوك ❌" ){
    file_put_contents("data/$from_id/kro_iraq","del");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"قم بارسال التوكن لحذف ويب هوك ❌",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'↪️ القائمة الرئيسية']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "del"){
$token = $text;

    $ali1 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getwebhookinfo"));
    $ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getme"));
    $tik2 = objectToArrays($ali1);
    $ur = $tik2["result"]["url"];
    $ok2 = $tik2["ok"];
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
    if ($ok != 1) {
        SendMessage($chat_id, "التوكن خطا❌");
    } else{
    file_put_contents("data/$from_id/kro_iraq","no");
    
	SendAction($chat_id,'typing');
 	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"انتظر يتم تحميل البيانات ...",
  ]);
  sleep(1);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
    'text'=>"انتظر يتم تحميل البيانات ...",
  ]);
}
file_get_contents("https://api.telegram.org/bot$text/deletewebhook");
sleep(1);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
    'text'=>"تم حذف ويب هوك بنجاح✅",
  ]);
  sleep(1);
  file_put_contents("data/$from_id/kro_iraq","no");
	bot('sendmessage',[
	'chat_id'=>$chat_id,
		    'message_id'=>$message_id + 1,
	'text'=>"تم الرجوع الئ القائمة الرئيسية✅",
        'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"عمل ويب هوك ✅"],['text'=>"معلومات التوكن 🔎"]],
	[['text'=>"حذف ويب هوك ❌"]]
	]
	])
	]);
}
?>
#@Viscobt1
#@musicalgeria
#@FROM_PHP
