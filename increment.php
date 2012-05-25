<?php
	$num = $_GET['num'];
	
	$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	$query = "SELECT * FROM counter WHERE num=$num";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	while ($row = mysqli_fetch_row($result)) {
	$a = $row[1];
	$a = $a + 1;
	$query1 = "UPDATE counter SET count=$a WHERE num=$num";
	mysqli_query($link, $query1);
	}
	mysqli_close($link);
	header( 'Location: http://varunpatil.xtreemhost.com/blog_new.php' ) ;
	
	
?>