<?php
 $ch = curl_init();  
  curl_setopt($ch, CURLOPT_URL, "http://localhost/login_restful/borrarUsuario/1");
  curl_setopt($ch, CURLOPT_HEADER, false);  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');  
  $data = curl_exec($ch);  
  print_r($data);  
  curl_close($ch); 
?>