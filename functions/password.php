<?php

function enc_password(string $password){
  $skey = "B@n<F@!2";
  $ekey = "r@<Y@^N@!MH@2!Q";
  $bytes = openssl_random_pseudo_bytes(32, $cstrong);
  $salt = bin2hex($bytes);
  $opt  = ['cost' =>12, 'salt'=>$salt];
  // add static salt
  $enc_password = $skey.$password.$ekey; 
  // echo $salt."<br>";
  // hash password
  $enc_password = password_hash($enc_password,PASSWORD_BCRYPT, $opt);
  return $enc_password;
}

function dec_password($password, $enc_password){
  $skey = "B@n<F@!2";
  $ekey = "r@<Y@^N@!MH@2!Q";
  $password = $skey.$password.$ekey;
  if(password_verify($password, $enc_password)){
    return true;
  }
  
}
?>