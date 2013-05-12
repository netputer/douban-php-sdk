<?php

  require('../src/DoubanOAuth.php');
  require('config.php');

  // $douban = new DoubanOAuth();

  $douban = new DoubanOAuth(array(
    'key' => KEY,
    'secret' => SECRET,
    'access_token' => ACCESS,
  ));

  $result = $douban->get('book/search', array(
   'q' => 'PHP',
  ));

  var_dump($douban->http_code, $result);
