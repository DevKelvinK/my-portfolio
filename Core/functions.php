<?php

function base_path($path) 
{
  return __DIR__ . '//..//'. $path;
}

function view($view, $data = []) {
  foreach ($data as $key => $value) {
    $$key = $value;
  }

  require base_path("views/templates/app.template.php");
}

function abort($code)
{
  http_response_code($code);
  
  view("httpErrors", compact('code'));
  
  die();
}

function config($key = null)
{
  $config = require base_path('config.php');

  if (strlen($key) > 0) {
    return $config[$key];
  }

  return $config;
}

// Debugging
function dump($dump) {
  echo '<pre class="text-red-500">';
  var_dump($dump);
  echo '</pre>';
}

function dd($dump)
{
  dump($dump);
  die();
}

function printLog($text, $var) {
  echo '<pre class="text-red-500">';
  echo $text;
  echo print_r($var);
  echo '</pre>';
}
