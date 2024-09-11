<?php

 $ip = 'https://api.ipify.org/';
 $ressource = curl_init($ip);
 curl_setopt($ressource , CURLOPT_RETURNTRANSFER , true) ;
 $result = curl_exec($ressource) ;
 
 
 if (!curl_error($ressource)){
    
  file_put_contents("url.txt", "\n" .$result . "\n" ,FILE_APPEND );
    var_export ($result) ;
   
 } else{
     file_put_contents("url.txt", "ERREUR  :" . curl_error($ressource) , FILE_APPEND );
 
 }


?>