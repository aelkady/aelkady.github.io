<?php 

function get_content($URL){
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL, $URL);
          $data = curl_exec($ch);
          curl_close($ch);
          return $data;
      }
 echo get_content('http://www.google.com');

?>