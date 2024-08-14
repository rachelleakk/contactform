<?php
// server information plus database name
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "simplecontactform";


$name = isset($_POST['name']) ? $_POST['name']: '';
$email = isset($_POST['email']) ? $_POST['email']: '';
$issue = isset($_POST['issue']) ? $_POST['issue']: '';
$comment = isset($_POST['comment']) ? $_POST['comment']: '';
// remove html tags from the comment
$comment = strip_tags($comment);
// create connection
$myconn = new mysqli($host, $user, $pass, $db_name);
//check if connection is connected
if($myconn -> connect_error){
	die("connection failed: " . $myconn -> connect_error);
}
// prepare, bind data and insert, execute sql state to the database table
$stmt= $myconn->prepare("INSERT INTO contactform (fullname, email, issue, comment) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $name, $email, $issue, $comment);

// Execute Sql statement
if($stmt->execute()){
	echo "<p><strong> Data successfully saved </strong></p>";
} else {
	echo "<p> Please try again </P>";
}

// close the sql statement and database connection 
$stmt->close();
$myconn->close();

?>
