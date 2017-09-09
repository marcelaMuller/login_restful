<?php

$postData = array(  
  'email'=>'prue11@ejemplo.com',  
  'pwd' =>'1234'  
  );  
  $ch = curl_init();  
  curl_setopt($ch, CURLOPT_URL, "http://localhost/login_restful/login");  
  curl_setopt($ch, CURLOPT_HEADER, false);  
  curl_setopt($ch, CURLOPT_POST, true);  
  //http_build_query => Generar una cadena de consulta codificada estilo URL a partir de array  
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
  $data = curl_exec($ch);  
  print_r($data);  
  curl_close($ch);  
?>
