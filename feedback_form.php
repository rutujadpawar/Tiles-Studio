<?php

   $connection = mysqli_connect('localhost','root','','feedback_db');

   if(isset($_POST['send'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $mailid = $_POST['mailid'];
      $country = $_POST['country'];
      $subject = $_POST['subject'];
      
      
      $request = "insert into feedback_form(fname, lname, mailid, country, subject) values('$fname','$lname','$mailid','$country','$subject')";
      mysqli_query($connection, $request);

      footer('location:feedback.php'); 
	echo 'Successfully Registered.';    


   }else{
      echo 'something went wrong please try again!';
   }

?>