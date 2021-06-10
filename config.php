<?php

require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();


// Find string in array
function array_find($needle, array $haystack) {

  foreach ($haystack as $key => $value) { // for normal array
    if (strpos(strtolower($value), strtolower($needle)) !== false) {
      return true;
    }
  }

  return false;
}

// Check site status code
// function get_http_response_code($domain) {
//
//   return gethostbyname($domain) != $domain;
//
// }
