<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the register page</title>
</head>

<body>

<?php 

/*
set sever
*/

include ('mimemail.inc.php');
$mimemail = new nomad_mimemail();

$smtp_host = "smtp.umn.edu";
$smtp_user = "songx544";
$smtp_pass = "Yang2006!";

$msg = 'Hello world';
$from = 'songx544@umn.edu';
$to = 'songx544@umn.edu';
$mimemail->new_mail($from, $to, $msg, $msg);

$mimemail->set_smtp_log(true);
$mimemail->set_smtp_host($smtp_host);
$mimemail->set_smtp_auth($smtp_user, $smtp_pass);

if($mimemail->send()) {
echo "email sent";
}
else{
	echo "error";
}
?>

</body>
</html>