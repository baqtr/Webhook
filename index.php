<?php

error_reporting(0);

header("Content-Type: application/json; charset=UTF-8");
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
date_default_timezone_set('Asia/Baghdad');
$API_KEY = "7137946160:AAGLFD8wIl0LNtswf9oST-5jhYf1rNZXkWM";
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
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
####لوحة الادمن###
$admin = "7013440973"; ###ايديك###
$sudo = array("1705301173","0000","0000");
$AMR = file_get_contents("AMR.txt");
$AMR0 = file_get_contents("AMR0.txt");
$AMR1= file_get_contents("AMR1.txt");
$AMR5 = file_get_contents("AMR2.txt");
$AMR6 = file_get_contents("AMR3.txt");
$AMR20 = json_decode(file_get_contents('php://input'));
$AMR18 = $update->message;
$AMR13 = $AMR18->chat->id;
$AMR17 = $AMR18->text;
$AMRD = $AMR20->callback_query->data;
$AMR12 = $AMR20->callback_query->message->chat->id;
$AMR14 =  $AMR20->callback_query->message->message_id;
$AMR15 = $AMR18->from->first_name;
$AMR16 = $AMR18->from->username;
$AMR11 = $AMR18->from->id;
$AMR2 = explode("\n",file_get_contents("AMR4.txt"));
$AMR3 = count($AMR2)-1;
if ($AMR18 && !in_array($AMR11, $AMR2)) {
file_put_contents("AMR4.txt", $AMR11."\n",FILE_APPEND);
  }
$AMR9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR0&user_id=".$AMR11);
$AMR10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR1&user_id=".$AMR11);
if($AMR18 && (strpos($AMR9,'"status":"left"') or strpos($AMR9,'"Bad Request: USER_ID_INVALID"') or strpos($AMR9,'"status":"kicked"') or strpos($AMR10,'"status":"left"') or strpos($AMR10,'"Bad Request: USER_ID_INVALID"') or strpos($AMR10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$AMR13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$AMR0.'
'.$AMR1,
]);return false;}
if($text == "/admin" and in_array($from_id,$sudo)){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعين قناة اشتراك اجباري ¹ 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ¹★' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹★' ,'callback_data'=>"delete11"]],
[['text'=>'تعين قناة اشتراك اجباري ² 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ²★' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²★' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك 💎' ,'callback_data'=>"AMR4"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"AMR"]],
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
}
if($AMRD == "AMR" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعين قناة اشتراك اجباري ¹ 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ¹★' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹★' ,'callback_data'=>"delete11"]],
[['text'=>'تعين قناة اشتراك اجباري ² 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ²★' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²★' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك 💎' ,'callback_data'=>"AMR4"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"AMR"]],
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR0"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR0");
}
if($AMR17 and $AMR == "AMR0" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR0.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR1'],
]
]])
]);
}
if($AMRD == "AMR1"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR0.txt");
}
if($AMRD == "AMR2"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR1");
}
if($AMR17 and $AMR == "AMR1" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR1.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete22"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR3'],
]
]])
]);
}
if($AMRD == "AMR3"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR1.txt");
}
if($AMRD == "AMR4"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
هلا بك عزيزي 
قنوات الاشتراك الاجباري
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
قناة ¹ => $AMR0 √
قناة ² => $AMR1 √
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}
#@amrakl
if($AMRD == "AMR5"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال التوجيه الان 💚",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR2");
}
if($AMR18 and $AMR == "AMR2" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"تم توجيه الرساله ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('forwardMessage', [
'chat_id'=>$AMR2[$i],
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR6"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال المراد الاذاعه له الان 💛",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR3");
}
if($AMR17 and $AMR == "AMR3" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'تم النشر بنجاح  ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('sendMessage', [
'chat_id'=>$AMR2[$i],
'text'=>$AMR17
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR7"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"هلا بك في قسم الاحصايات  💛
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ

 عدد مشتركين البوت  [ $AMR3 ]

حاله سرعه البوت -: 100%
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}

if($AMRD == "AMR10"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR2.txt");
}
if($AMRD == "AMR11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR3.txt","AMR");
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 == $admin){
bot('sendMessage',[
'chat_id'=>$AMR18->reply_to_message->forward_from->id,
'text'=>$AMR17,
]);
}
if($AMRD == "AMR12"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR3.txt");
}

$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$UploadEr = json_decode(file_get_contents("UploadEr/UploadEr.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}
//تخزينات الاذاعة//
echo "تم تشغيل البوت ✅";
$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$msg = file_get_contents("msg.php");

$users = explode("\n",file_get_contents("BEDO/arslan.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("BEDO/arslan.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$arslan09 = json_decode(file_get_contents("BEDO/arslan09.json"),true);
$suodo = $arslan09['sudoarr'];
$al = $arslan09['addmessage'];
$ab = $arslan09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$arslan09['messagee'] = $arslan09['messagee']+1;
file_put_contents("BEDO/arslan09.json",json_encode($arslan09,32|128|265));
}
if($message and $from_id == $admin){
$arslan09['addmessage'] = $arslan09['addmessage']+1;
file_put_contents("BEDO/arslan09.json",json_encode($arslan09,32|128|265));
}

$all = count($users)-1;
//---------------------------//

//بداية كود الحظر//
$sudo = array("1705301173");

$get_ban=file_get_contents('sudo/ban.txt');
$ban =explode("\n",$get_ban);

$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban);

if($message  and in_array($from_id,$ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• لقد تم حظرك من البوت ❌
",
]);return false;}

$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 

if($countban<=0){
$countban="لايوجد محظورين";
}
function sendwataw($chat_id,$message_id){

$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
if($countban<=0){
$countban="لايوجد محظورين";
}
}

@$infosudo = json_decode(file_get_contents("sudo.json"),true);
$sudoamr= $infosudo["info"]["amr"];
if($data == "start"){
$infosudo["info"]["amr"]="start";
file_put_contents("sudo.json", json_encode($infosudo));
}

$usrbot = bot("getme")->result->username;
$emoji = "➡️
🎟️
↪️
🔘
🏠";

$emoji = explode("\n", $emoji);
$b = $emoji[rand(0, 4)];
$NamesBACK = "رجوع $b";

define("USR_BOT", $usrbot);
mkdir("Host");
mkdir("BEDO");
mkdir("sudo");


$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$UploadEr = json_decode(file_get_contents("UploadEr/UploadEr.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}

	
$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$Host = json_decode(file_get_contents("Host/Host.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}

//——————————————————//
$MTAWR = "XX44G";  //معرفك
$admin = "7013440973";  //ايديك//
//——————————————————//

//خزن الاشتراك//
if($Host['hui'] == null) {
$hui ="لا يوجد";
}else{
$hui = $Host['hui'];
}

//دخول الاعضاء//
$mem = explode("\n",file_get_contents("mem.txt"));
$je = file_get_contents("mem.txt");
$count = explode("\n",$je);
$SAl = count($count) -1;
if($username != null){
$sf = "@$username";
}else
if($username == null){
$sf = "لا يوجد معرف";
}
if($message and !in_array($from_id,$mem)){
file_put_contents("mem.txt",$from_id . "\n" ,FILE_APPEND);
$SAl = $SAl + 1;
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*• تم دخول شخص جديد الى البوت 💀*
    •–––––––––––––––––––––––––––––––•

• معلومات الشخص 📜 :

- الاسم : [$name](tg://user?id=$from_id)
- المعرف : $sf
- الايدي : [$from_id](tg://user?id=$from_id)

    •–––––––––––––––––––––––––––––––•
• عدد الاعضاء الكلي :* $SAl 📊*
",
'parse_mode'=>"Markdown",
]);
}

//تشغيل وايقاف البوت//
$madey = json_decode(file_get_contents("madey.json"),true);
if(!$madey['bot']){
$madey['bot'] = "on";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}
if($madey['bot'] == "on"){
$xm = "البوت يعمل ✅️";
}else{
$xm = "البوت متوقف ❌️";
}
if($message and $madey['bot'] == "off" and $from_id != $admin){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• البوت تحت الصيانة 🛠 •
",
'parse_mode'=>'markdown',
]);return false;
}
if($data == "on"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

• تم تشغيل البوت بنجاح ✅️
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ➡️ ",'callback_data'=>"Thkom" ]],
]])
]);
$madey['bot'] = "on";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}
if($data == "off"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

• تم ايقاف البوت بنجاح ❌️
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ➡️ ",'callback_data'=>"Thkom" ]],
]])
]);
$madey['bot'] = "off";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}


$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
$message = $update->message;
$message_id = $update->message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$name1 = $message->from->last_name;
$from_id = $message->from->id;
$tc = $message->chat->type;
$forward = $update->message->forward_from->id;
}
if(isset($update->callback_query)){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $chat_id;
$tc = $update->callback_query->message->chat->type;
}
$boti = bot('getme',['bot'])->result->username;
$hook = json_decode(file_get_contents("hook.json"),1);
function webhook($array){
file_put_contents("hook.json",json_encode($array,32|128|265));
}
if($update){
bot("setMyCommands",[
    "commands"=>json_encode([
        ['command'=>"start",'description'=>'رسالة البدء'],
      ['command'=>"speed",'description'=>'قياس السرعة ⚡'],
        ])
    ]); 
}
if ($text == "/speed") {
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
#--------------------- ستارت -------------------#
if($text ==  '/start' ){
bot('sendMessage',[ 
'chat_id'=>$chat_id,
 'text'=>"* مرحبا * [$name](tg://user?id=$chat_id)
*• مرحبا بك في بوت 💭 عمل ويب هوك وحذف 🌙 ويب هوك بلأضافه الى 📃 استخراج معلومات التوكن ☑️ •*
*• ᴄᴀɴ ᴄʀᴇᴀᴛᴇ ᴡᴇʙʜᴏᴏᴋ ᴏʀ ᴅᴇʟᴇᴛᴇ ᴡᴇʙʜᴏᴏᴋ ᴏʀ ɪɴғᴏ ʙᴏᴛ ᴡᴇʙʜᴏᴏᴋ ғʀᴏᴍ ʙᴏᴛ •*
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• عمل ويبهوك •", 'callback_data'=>'create'],['text'=>"• حذف ويبهوك •", 'callback_data'=>'delet']],
[['text'=>"• معلومات التوكن •", 'callback_data'=>'infos'],['text'=>"• ɪɴғᴏ ᴍʏ •", 'callback_data'=>'dev']],
]
])
]);
}
if($data == 'exit'){
 bot('editMessageText',[ 
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"* اهلا * [$name](tg://user?id=$chat_id)
*• مرحبا بك في بوت 💭 عمل ويب هوك وحذف 🌙 ويب هوك بلأضافه الى 📃 استخراج معلومات التوكن ☑️ •*
*• ᴄᴀɴ ᴄʀᴇᴀᴛᴇ ᴡᴇʙʜᴏᴏᴋ ᴏʀ ᴅᴇʟᴇᴛᴇ ᴡᴇʙʜᴏᴏᴋ ᴏʀ ɪɴғᴏ ʙᴏᴛ ᴡᴇʙʜᴏᴏᴋ ғʀᴏᴍ ʙᴏᴛ •*
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• عمل ويبهوك •", 'callback_data'=>'create'],['text'=>"• حذف ويبهوك •", 'callback_data'=>'delet']],
[['text'=>"• معلومات التوكن •", 'callback_data'=>'infos'],['text'=>"• ɪɴғᴏ ᴍʏ •", 'callback_data'=>'dev']],
]
])
]);
unset($hook[$from_id]);
 webhook($hook);
}
#--------------------- save -------------------#
$mydata = $hook[$chat_id]['data'];
$mytoken = $hook[$chat_id]['token'];
$array=['create','delet','infos'];
if(in_array($data,$array)){
 bot('editMessageText',[ 
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
*حسنا عزيزي 🔬 الان قم بارسال التوكن*
*• ᴏᴋ ᴄᴀɴ sᴇɴᴅ ʏᴏᴜʀ ᴛᴏᴋᴇɴ ᴛʜᴇ ʙᴏᴛ •*",
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• ʙᴀᴄᴋ •", 'callback_data'=>'exit']],
]])
 ]);
 $hook[$from_id]['data']=$data;
 $hook[$from_id]['message']=$message_id;
 webhook($hook);
 }
#--------------------- معلومات التوكن -------------------#
if(preg_match('/\d:\S{35}/',$text)){
 $info = json_decode(file_get_contents("https://api.telegram.org/bot".filter_var($text,FILTER_SANITIZE_STRING)."/getme"));
$getwebhook = json_decode(file_get_contents("https://api.telegram.org/bot$text/getwebhookinfo"));
$bot_user = $info->result->username;
$bot_name = $info->result->first_name;
$bot_id = $info->result->id;
$bot_url = $getwebhook->result->url;
if($info->ok =="ture"){
bot('deletemessage',[ 
 'chat_id'=>$chat_id,
 'message_id'=>$hook[$from_id]['message']]);
if ($mydata=='create'){
bot('sendMessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"
*حسنا عزيزي 🔬 الان قم بارسال 🔖 رابط الملف 🕸*
*• ᴏᴋ sᴇɴᴅ ʏᴏᴜʀ ᴜʀʟ ᴡᴇʙsᴇᴛ •*",
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• ʙᴀᴄᴋ •", 'callback_data'=>'exit']],
]])
 ]);
 $hook[$from_id]['token']=$text;
 $hook[$from_id]['message']=$message_id;
 webhook($hook);
}
#---------------------  حذف الويب هوك -------------------#
if ($mydata=='delet'){
bot('sendMessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"* • ᴅᴏɴᴇ ᴅᴇʟᴇᴛᴇ ʏᴏᴜʀ ᴡᴇʙʜᴏᴏᴋ • *",
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• ʙᴀᴄᴋ •", 'callback_data'=>'exit']],
]])
 ]);
 $send ="------------------------------------------\nᴅᴏɴᴇ ᴅᴇʟᴇᴛᴇ ᴡᴇʙʜᴏᴏᴋ\n\n ᴅᴇʟᴇᴛᴇ ʙʏ : @$boti";
file_get_contents("https://api.telegram.org/bot".$text."/sendmessage?chat_id=$chat_id&text=".urlencode($send));
file_get_contents("https://api.telegram.org/bot$text/deletewebhook");
unset($hook[$from_id]);
 webhook($hook);
}
#--------------------- معلومات الويب هوك -------------------#
if ($mydata=='infos'){
bot('sendMessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"*
• ɪɴғᴏ ʙᴏᴛ @$bot_user :
 ------------------------------------------
• ʙᴏᴛ ɴᴀᴍᴇ : *[$bot_name](@$bot_user)*
• ʙᴏᴛ ᴜsᴇʀ : @$bot_user
• ʙᴏᴛ ɪᴅ : $bot_id
• ᴡᴇʙʜᴏᴏᴋ ᴜʀʟ : $bot_url *",
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• ʙᴀᴄᴋ •", 'callback_data'=>'exit']],
]])
 ]);
 unset($hook[$from_id]);
 webhook($hook);
}
}else{
bot('sendMessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"
*🔬 التوكن 🔖 غير صحيح🕸*
* • ʏᴏᴜ sᴇɴᴛ ᴛʜᴇ ᴡʀᴏɴɢ ᴛᴏᴋᴇɴ •*",
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• ʙᴀᴄᴋ •", 'callback_data'=>'exit']],
]])
 ]);
}}
if(preg_match("/\b(?:(?:https?|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$text) and $mytoken!==null){
$send ="------------------------------------------\nᴅᴏɴᴇ ᴄʀᴇᴀᴛᴇ ᴡᴇʙʜᴏᴏᴋ\n\nsᴇɴᴅ /start ᴛᴏ ʀᴜɴ ʏᴏᴜʀ ʙᴏᴛ\n\nᴄʀᴇᴀᴛᴇ ʙʏ : @$boti";
file_get_contents("https://api.telegram.org/bot".$mytoken."/setwebhook?url=$text");
file_get_contents("https://api.telegram.org/bot".$mytoken."/sendmessage?chat_id=$chat_id&text=".urlencode($send));
bot('deletemessage',[ 
 'chat_id'=>$chat_id,
 'message_id'=>$hook[$from_id]['message']]);
 bot('sendMessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"*
 • ᴅᴏɴᴇ ᴄʀᴇᴀᴛᴇ ᴡᴇʙʜᴏᴏᴋ ʏᴏᴜʀ ʙᴏᴛ •
 • ᴀɴᴅ ᴅᴏɴᴇ sᴇɴᴅ ᴍᴇssᴀɢᴇ ʏᴏᴜʀ ʙᴏᴛ •*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"• ʙᴀᴄᴋ •", 'callback_data'=>'exit']],
 ]])
 ]);
 unset($hook[$from_id]);
 webhook($hook);
}

if($data == 'dev'){
 bot('editMessageText',[ 
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"*
 ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
 • •
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎*",
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
 [['text'=>"• ᴍʏ ᴘʀᴏғɪʟᴇ •", 'url'=>'t.me/RRR7ZZZ']],
 [['text'=>"• ᴍʏ ᴄʜᴀɴɴᴇʟ •", 'url'=>'t.me/RRR6ZZZ']],
 [['text'=>"• ʙᴀᴄᴋ •", 'callback_data'=>'exit']],
]
])
]);
}
