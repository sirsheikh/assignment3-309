<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$conn = new mysqli('localhost', 'root','' ,'cse309');

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$data=array(
		$_POST['first_name'],
		$_POST['last_name'],
		$_POST['phone'],
		$_POST['email'],
		$_POST['subject'],
		$_POST['message'],
	);
	$insert = 'INSERT INTO contact_me (first_name, last_name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?, ?)';
	$stmt = $conn->prepare($insert);
	$stmt->bind_param('ssssss',$data[0], $data[1], $data[2], $data[3], $data[4], $data[5]);
	$result = $stmt->execute();
	if ($result) {
    // Success message
		$_SESSION['flash'] = 200;

    // Redirect to the main page after 2 seconds
		header("refresh:2;url=index.php");
	} else {
		$_SESSION['flash'] = 400;
	}
	$stmt->close();
	$conn->close();;

	
} else {
}
?>