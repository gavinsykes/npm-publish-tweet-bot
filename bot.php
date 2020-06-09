<?php
require_once 'twitter_class.php';

function post_tweet($status) {
  $settings = [
    'oauth_access_token'        => TWITTER_AUTH_KEYS['ACCESS_TOKEN'],
    'oauth_access_token_secret' => TWITTER_AUTH_KEYS['ACCESS_TOKEN_SECRET'],
    'consumer_key'              => TWITTER_AUTH_KEYS['CONSUMER'],
    'consumer_secret'           => TWITTER_AUTH_KEYS['CONSUMER_SECRET']
  ];
  $url = 'https://api.twitter.com/1.1/statuses/update.json';
  $requestMethod = 'POST';
  $postfields = [
    'status' => $status
  ];
  $tweet = new TwitterAPIExchange($settings);
  echo $tweet->buildOauth($url, $requestMethod)
             ->setPostFields($postfields)
             ->performRequest();
  echo '\n';
}
post_tweet('Hello from my new automated Tweeter! Testing, testing, 1, 2, 3! I wonder if foreign charachters and emojis will work. 🎉አនេះა這こນີ້여ဒီနෙ');
?>
