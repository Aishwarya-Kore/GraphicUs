<?php
if(isset($_POST["submit"]))
{
    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['subject'];
    $d=$_POST['message'];
    $conn=new mysqli("localhost","root","","contactus");
    if ($conn->connect_error){
        die("Connection failed:" .$conn->connect_error);
        }
        $sql = "Insert into contact values('$a','$b','$c','$d')";

if($conn->query($sql)== TRUE){
}
if(filter_var($b, FILTER_VALIDATE_EMAIL)){ //validating user email
  $subject = "Your Order Lists";
  $message = "Thanks for the feedback on your experience with our Graphicus Team. We sincerely appreciate your insight because it helps us build a better user interface experience. \n\n If you have any more suggestions, questions, comments, concerns, compliments, please feel welcome to reach back out as we would be more than happy to assist.\n\n
  Have a nice day.\n
  Thank You\n\n Graphicus Team";
  $sender = "teamgraphicus@gmail.com";
  //php function to send mail
  if(mail($b, $subject, $message, $sender)){
  ?>
  <!-- show sucess message once email send successfully -->
  <div class="alert success-alert">
    <?php echo '<script src="http://localhost/graphic/"> alert("We have received your feedback Thank you !"); </script>' ?>
  </div>
  <?php
  $email = "";
  }else{
  ?>
  <!-- show error message if somehow mail can't be sent -->
  <div class="alert error-alert">
  <?php echo "Failed while sending your mail!" ?>
  </div>
  <?php
  }
}else{
  ?>
  <!-- show error message if user entered email is not valid -->
  <div class="alert error-alert">
  <?php echo "$d is not a valid email address!" ?>
  </div>
  <?php
}
}
?>