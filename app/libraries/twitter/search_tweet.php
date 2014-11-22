<?php
// ツイート内容
$search_word = '山手線';
$q = urlencode($search_word);
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
$ret = $twitterOauth->OAuthRequest("https://api.twitter.com/1.1/search/tweets.json","GET",array("q"=>$q, "count"=>100, "locate"=>"ja"));
//$q = urlencode($search_word);
//$ret = file_get_contents('http://search.twitter.com/search.json?q='.$q);
$ret = json_decode($ret, true);
//var_dump($ret['statuses'][0]['text']);
foreach ($ret['statuses'] as $result) {
   echo $result['text'];
}
?>
