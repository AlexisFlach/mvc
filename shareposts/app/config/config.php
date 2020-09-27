<?php
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'flachen');
  define('DB_PASS', 'password');
  define('DB_NAME', 'testposts');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://shareposts.test:8888/shareposts');
  // Site Name
  define('SITENAME', 'SharePosts');
  // App Version
  define('APPVERSION', '1.0.0');


  mysql -u <flachen> -p<password> <testposts>

  mysql -u flachen -p