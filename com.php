<?php
	$name = $_POST['name'];
	$comments = $_POST['comments'];
	
	$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	$query1 = "SELECT * FROM comments";
	$result1 = mysqli_query($link, $query1) or die(mysqli_error($link));
	
	$query2 = "DROP TABLE comments";
	$result2 = mysqli_query($link, $query2) or die(mysqli_error($link));
	
	$query3 = "CREATE TABLE comments(
	num INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(20),
	comments VARCHAR(100),
	valid INT DEFAULT 0 NOT NULL)";
	$result3 = mysqli_query($link, $query3) or die(mysqli_error($link));
	
	$query4 = "INSERT INTO comments(name,comments) values('$name','$comments')";
	$result4 = mysqli_query($link, $query4) or die(mysqli_error($link));
	
	while ($row = mysqli_fetch_row($result1)) {
	$b = $row[1];
	$c = $row[2];
	$d = $row[3];
	$query5 = "INSERT INTO comments(name,comments,valid) values('$b','$c','$d')";
	mysqli_query($link, $query5);
	}
	mysqli_close($link);
	header( 'Location: http://varunpatil.xtreemhost.com/comments.php' ) ;
	
	
?>
