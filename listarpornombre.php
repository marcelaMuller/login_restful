<?php
  $ch = curl_init();  
  curl_setopt($ch, CURLOPT_URL, "http://localhost/login_restful/login_restful/listaPorNombre/usuario");  
  curl_setopt($ch, CURLOPT_HEADER, false);  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
  //$data = json_decode(curl_exec($ch),true);  
  $data = curl_exec($ch);  
  print_r($data);  
  curl_close($ch);  

?>