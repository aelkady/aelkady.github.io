<?php

$message="The PHP file says:\nConnection Type:".$_POST["connection"]."\n";

if(!empty($_POST["latitdue"])) {
	$message.="Latitude: ".$_POST["latitude"]."\n";
}
if(!empty($_POST["longitude"])) {
	$message.="Longitude: ".$_POST["longitude"]."\n";
}
if(!empty($_POST["altitude"])) {
	$message.="Altitude: ".$_POST["altitude"]."\n";
}
if(!empty($_POST["accuracy"])) {
	$message.="Accuracy: ".$_POST["accuracy"]."\n";
}
if(!empty($_POST["altitudeAccuracy"])) {
	$message.="Altitude Accuracy: ".$_POST["altitudeAccuracy"]."\n";
}
if(!empty($_POST["heading"])) {
	$message.="Heading: ".$_POST["heading"]."\n";
}
if(!empty($_POST["speed"])) {
	$message.="Speed: ".$_POST["speed"]."\n";
}
if(!empty($_POST["timestamp"])) {
	$message.="Timestap: ".$_POST["timestamp"]."\n";
}
if(!empty($_POST["country"])) {
	$message.="Country: ".$_POST["country"]."\n";
}
if(!empty($_POST["province"])) {
	$message.="Province: ".$_POST["province"]."\n";
}
if(!empty($_POST["city"])) {
	$message.="City: ".$_POST["city"]."\n";
}
if(!empty($_POST["street"])) {
	$message.="Street: ".$_POST["street"]."\n";
}
if(!empty($_POST["postalCode"])) {
	$message.="Postal Code: ".$_POST["postalCode"]."\n";
}
if(!empty($_POST["countryCode"])) {
	$message.="Country Code: ".$_POST["countryCode"]."\n";
}
if(!empty($_POST["formattedAddress"])) {
	$message.="Formatted Address: ".$_POST["formattedAddress"]."\n";
}
echo $message;
?>