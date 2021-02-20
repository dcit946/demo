<?php
$to = "dcit946@gmail.com";
$subject = "test mail";
$message = "This is a test message";
$from = "dcit946@gmail.com";
$headers = "From : $from";
mail($to,$subject,$message,$headers);
?>