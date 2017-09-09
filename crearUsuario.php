<?php 
$recibido=$_POST;

$postData = array(  
  'nombre'=>$recibido['nombre'],  
  'email'=>$recibido['email'],  
  'pwd' =>$recibido['password'] ,
  'fRegistro'=>$recibido['fRegistro']
  
  );  
//print_r($postData);
  
  $ch = curl_init();  
  curl_setopt($ch, CURLOPT_URL, "http://localhost/login_restful/login_restful/crearUsuario");  
  curl_setopt($ch, CURLOPT_HEADER, false);  
  curl_setopt($ch, CURLOPT_POST, true);  
  //http_build_query => Generar una cadena de consulta codificada estilo URL a partir de array  
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
  $data = curl_exec($ch);  
  print_r($data);  
  curl_close($ch);
  ?>