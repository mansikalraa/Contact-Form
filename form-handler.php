<?php

$name= $_POST['name'];
$email=$_POST['email'];
$ques=$_POST["question"];

$from='mansi.kalra23@gmail.com';
$subject='Question!!!';
$body="Name: $name.\n"."Email: $email.\n"."Question: $ques.\n";
$to="mansi23kalra@gmail.com";
$headers="From: $from" . "\r\n" .
            "Reply-To: $email";

mail($to,$subject,$body,$headers);

header("Location: index.html");
?>