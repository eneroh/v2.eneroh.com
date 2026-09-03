<?php>
  if(isset($_POST['submit']))  {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $country = $_POST['country'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $mailTo = "admin@eneroh.com";
    $headers = "From: " .$mailfrom;
    $txt = "You have received an e-mail from " .$fname $lname from $country.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
  }
?>
