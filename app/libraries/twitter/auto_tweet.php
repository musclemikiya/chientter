<?php
// ツイート内容
$status = 'キムチ鍋を食べるなう';

require_once("twitteroauth.php");

 // Consumer keyの値
//$consumer_key = "2J6SHGh2cT7ygr8XWp3Q";
$consumer_key = "hx6skRSqmqHevxgLEHplA";
// Consumer secretの値
//$consumer_secret = "vhiD8CKdre8Q0n6gCUueTjmLmA30fOvfwwqrl6Atkw";
$consumer_secret = "dXD3AW6DY4E2Am01QHdByPhijo2maAd51AQFgJeu0";
// Access Tokenの値
$access_token = "2255970090-TBqNrOgFbkOJLaMbosWqUO8sTxqTxwRFbFxxXmK";
// Access Token Secretの値
$access_token_secret = "7hfCEQ4hPVisbvtVBaiDgQDoI0GyT8JnW9D2VNdpMAvG9";

 // OAuthオブジェクト生成
 $twitterOauth = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
// $ret = $twitterOauth->OAuthRequest("http://api.twitter.com/1/statuses/update.xml","POST",array("status"=>$status));
$ret = $twitterOauth->OAuthRequest("http://api.twitter.com/1.1/statuses/update.json","POST",array("status"=>$status));
 print $ret;
 ?>
