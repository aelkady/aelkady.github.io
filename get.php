<?php 
$date_of_expiry = time() + 60000 ;
setcookie( "userlogin", "anonymous", $date_of_expiry);
echo 'cookiename=userlogin&cookiekey='. $_COOKIE["userlogin"];
?>