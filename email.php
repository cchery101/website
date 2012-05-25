<?php
   $recipient = 'varun.basavaraj.patil@gmail.com';
   $subject = $_POST['subject'];
   $from = stripslashes($_POST['name']);
   $msg = "Message from: $from             \n\n".stripslashes($_POST['message']);
   
   print "Confirm by clicking	<a href=\"mailto:varun.basavaraj.patil@gmail.com?subject=$subject&body=$msg\">send</a>"
   
?>