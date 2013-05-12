<?php

  require('../src/DoubanOAuth.php');
  require('config.php');

  $douban = new DoubanOAuth();

  $result = $douban->get('book/search', array(
   'q' => $_GET['q'],
  ));

  var_dump($douban->http_code, $result);
