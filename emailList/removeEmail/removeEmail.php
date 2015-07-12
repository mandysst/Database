<html>
<head>
	<title>Welcome to the register page</title>
</head>

<body>

<form method="post" action =" <?php  echo $_SERVER['PHP_SELF'];  ?>">

<?php 

echo 'Thanks for submitting your infomation. <br>';

$dbc = mysqli_connect('127.0.0.1', 'mandy', 'song9132', 'students') 
 or die('Error, connecting to server.'); 

/*$your_name = $_POST['yourName'];*/
$your_email = $_POST['yourEmail'];


if (isset($_POST['submit'])) {
	foreach ($_POST['todelete'] as $delete_id) {
		$query = "delete from email where email = '$your_email'";
		$result = mysqli_query($dbc, $query) or die('Error deleting');
	}
	echo "Customer(s) removed. <br />";
}

echo 'we get here!!!<br>';
$query0 = "SELECT * FROM email";
$result0 = mysql_query($dbc, $query0);


while($row = mysql_fetch_array($result0)){
	echo '<input type="checkbox" value = "$row['id']" name = "todelete[]" />';
	echo $row['your_name'];
	echo ' ' . $row['your_email'];
	echo "<br/>";
}



mysqli_close($dbc);

echo 'successful deleting';

/*
echo 'Your name is ' . $your_name . ".<br>";
echo 'Your email is ' . $your_email . ".<br>";
echo 'Your level is ' . '1' . ".<br>";
*/
?>

 <input type = "submit" name = "submit" value = "Remove">

</form>
</body>
</html>