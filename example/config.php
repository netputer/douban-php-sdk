<?php

  define('KEY', 'Your API Key');
  define('SECRET', 'Your API Secret');
  define('REDIRECT', 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/callback.php');

  define('SCOPE', 'douban_basic_common,book_basic_r,book_basic_w');
  define('STATE', 'Something');
