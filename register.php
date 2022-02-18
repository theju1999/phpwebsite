<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($conn, $_POST['name']);

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phonenumber= mysqli_real_escape_string($conn, $_POST['phonenumber']);
	

		
	// checking empty fields
	if(empty($name) || empty($email) || empty($phonenumber)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		if(empty($phonenumber)) {
			echo "<font color='red'>phone number field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO users(name,email,phonenumber) VALUES('$name','$email','$phonenumber')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.html'>back</a>";
	}
}
?>
</body>
</html>
