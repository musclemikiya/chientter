<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class FooCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'search_tweet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

    /**
     * 定数
     */
    const TWEET_NUM = 50;
    const PERCENTAGE = 50;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        require_once(__DIR__.'/../libraries/twitter/twitteroauth.php');
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        // 検索ワード
        $search_words = array('山手線', '田園都市線');
        $user = '@musclemikiya';
        //$target_words = '/遅延|人身事故|遅れ|見合わせ|止まって|とまって/';
        $target_words = '/山手線/';    

        // keyの値
        $consumer_key = "hx6skRSqmqHevxgLEHplA";
        $consumer_secret = "dXD3AW6DY4E2Am01QHdByPhijo2maAd51AQFgJeu0";
        $access_token = "2255970090-TBqNrOgFbkOJLaMbosWqUO8sTxqTxwRFbFxxXmK";
        $access_token_secret = "7hfCEQ4hPVisbvtVBaiDgQDoI0GyT8JnW9D2VNdpMAvG9"; 
        // OAuthオブジェクト生成
        $twitterOauth = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
        
        foreach ($search_words as $word) {
            $q = urlencode($word);
            $ret = $twitterOauth->OAuthRequest("https://api.twitter.com/1.1/search/tweets.json","GET",array("q"=>$q, "count"=>self::TWEET_NUM, "locate"=>"ja"));
            $ret = json_decode($ret, true);
            $count = 0;
            foreach ($ret['statuses'] as $result) {
               if (preg_match($target_words, $result['text'])) $count++;
            }
            var_dump($count);
            Log::info("{$count} ");
            if ($count/self::TWEET_NUM*100 >= self::PERCENTAGE) {
                $message = "{$user} {$word}が遅延しています";
                $ret = $twitterOauth->OAuthRequest("http://api.twitter.com/1.1/statuses/update.json","POST",array("status"=>$message));
                var_dump($ret);
                // print $ret;
                echo $word;
            }
        }
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array();
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array();
    }

}
