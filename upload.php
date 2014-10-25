<?php

  print_r($_FILES);
  
   $results = print_r($_FILES, 1) ;
   
   file_put_contents('mahi.txt', $results);

   print "<br>";
if ($_FILES["file"]["error"] > 0) {
  echo "Return Code: " . $_FILES["file"]["error"] . "";
} else {
  
  file_put_contents('ranga.txt', "reddy");
  echo "Upload: " . $_FILES["file"]["name"] . "";
  echo "Type: " . $_FILES["file"]["type"] . "";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb";
  echo "Temp file: " . $_FILES["file"]["tmp_name"] . "";
  move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]); //Save location
  echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
}
?>