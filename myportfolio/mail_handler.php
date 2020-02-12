<?php

if (isset($_POST['submit'])) {
$name = $_POST['first_name'];
$subject = $_POST['last_name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "karel.kivimagi@khk.ee";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}