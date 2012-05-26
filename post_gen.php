<?php

$date = $_POST['date'];   
$heading = $_POST['heading'];
$content = $_POST['content'];
$link = $_POST['link'];
   
   
$dblink = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
   
$query = "SELECT * FROM auto";
$result = mysqli_query($dblink, $query) or die(mysqli_error($dblink));
while ($row = mysqli_fetch_row($result)) {
$a = $row[0];
$a = $a + 1;
$query1 = "UPDATE auto SET count=$a";
mysqli_query($dblink, $query1);
}
   

$query1 = "INSERT INTO blog VALUES(0,'$heading','$link','$content', '$date')";
$result1 = mysqli_query($dblink, $query1) or die(mysqli_error($dblink));
mysqli_close($dblink);

header( 'Location: http://varunpatil.xtreemhost.com/admin.php?e=1' ) ;
?>
