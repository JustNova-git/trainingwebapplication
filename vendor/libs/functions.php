<?php

function debug($arr)
{
}

function thisURL()
{
     // $host = $_SERVER['HTTP_X_ORIGINAL_HOST'];
     // echo $host;
     // return $host;
}

function sendMessage($type, $message, $fileds = array())
{
     $response['type'] = $type;
     $response['message'] = $message;
     foreach ($fileds as $key => $value) {
          $response[$key] = $value;
     }
     die(json_encode($response));
}

function dashOnPoint($e)
{
     $e =  str_replace(" ", "-", $e);

     return $e;
}
function pontOnDash($e)
{
     $e =  str_replace("-", " ", $e);

     return $e;
}
function showData($e)
{
     if (!empty($e)) $e;
     else $e = time();
     $e = date('m/d/Y H:i:s', $e);
     return $e;
}
function inUnix($e)
{
     return strtotime($e);
}
