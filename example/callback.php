<?php

  require('../src/DoubanOAuth.php');
  require('config.php');

  $douban = new DoubanOAuth(array(
    'key' => KEY,
    'secret' => SECRET,
    'redirect_url' => REDIRECT,
  ));

  $result = $douban->getAccessToken($_GET['code']);

  var_dump($_GET['state'], $result);

  $result = $douban->get('user/~me');

  var_dump($result);
