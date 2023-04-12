<?php
  function bot($method, $datas=[]){
    $url = "https://api.telegram.org/bot{token}/".$method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
  return bot('sendMesage',[
    'chat_id'=>2025653134,
    'text'=>"Salom, Sizga sayt orqali ".$_POST['name']." dan(Email: ". $_POST['email'] .") Xabar keldi\nMavzusi:". $_POST['subject'] ."\nMatni: ". $_POST['message'] .""
  ]);
} else {
  echo "XATO";
}

?>
