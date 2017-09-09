<?php

  $data = array("nombre" => 'usuario');  
  $ch = curl_init();  
  curl_setopt($ch, CURLOPT_URL, "http://localhost/login_restful/login_restful/actualizarNombre/1");  
  curl_setopt($ch, CURLOPT_HEADER, false);  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");  
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));  
  $data = curl_exec($ch);  
  print_r($data);  
  curl_close($ch);  
?>