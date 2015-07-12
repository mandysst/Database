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

if(empty($your_name)){
	echo 'Your name could not be void';
}

if(empty($your_email)){
	echo 'Your email could not be void';
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

 $query = "INSERT INTO email(name, email, level)" . 
  "VALUES ('$your_name', '$your_email', '1')";


 $result = mysqli_query($dbc, $query)
 or die('Error querying database');


/*
$from = 'songx544@umn.edu';
$subject = $_POST['subject'];
$text = $_POST['your_email'];


 $query2 = "SELECT * FROM email";
 $result2 = mysqli_query($dbc, $query2) or die('Error querying database 2');
 //$row = mysql_fetch_array($result2);

 while($row = mysql_fetch_array($result2)) {
 	$name = $row['name']; 
 	$email = $row['email'];
 	$level = $row['level'];

 	$msg = "Dear $name";
 	$to = $row['email'];
 	mail($to, $subject, $msg, 'From:' . $from);
 	echo 'Email sent to:' . $to . '<br />';
 }
 */

mysqli_close($dbc);


echo 'Your name is ' . $your_name . ".<br>";
echo 'Your email is ' . $your_email . ".<br>";
echo 'Your level is ' . '1' . ".<br>";
echo '<br>';
 echo "success with inserting<br>";
?>

</body>
</html>