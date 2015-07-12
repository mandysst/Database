<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the register page</title>
</head>

<body>

<?php 

echo 'Thanks for submitting your infomation. <br>';

$your_name = $_POST['yourName'];
$your_email = $_POST['yourEmail'];
$your_userName = $_POST['userName'];
$your_password = $_POST['password'];
$your_passwordRepeat = $_POST['passwordRepeat'];

$arr = array($your_name, $your_email, $your_userName, $your_password, $your_passwordRepeat);

if ($your_password != $your_passwordRepeat)
{
	echo "The passwords are not equal <br>";
}

/*
function testInput() {
	global $your_name, $your_email, $your_userName, $your_password, $your_passwordRepeat, $arr;
	foreach ($arr as $value) {
		if (! isset($value) || trim($value) == '') {
			echo "Please fill in complete infomation <br>";
		}
	}
}

testInput();
*/

$dbc = mysqli_connect('127.0.0.1', 'mandy', 'song9132', 'students') 
 or die('Error, connecting to server.'); 

 $query = "INSERT INTO student_table(first_name, email_address, username, password)" . 
  "VALUES ('$your_name', '$your_email', '$your_userName', '$your_password')";

 echo "success with inserting<br>";

 $result = mysqli_query($dbc, $query)
 or die('Error querying database');

 mysqli_close($dbc);


echo 'Your name is ' . $your_name . ".<br>";
echo 'Your email is ' . $your_email . ".<br>";
echo 'Your name is ' . $your_userName . ".<br>";
echo 'Your email is ' . $your_password . ".<br>";
?>

</body>
</html>