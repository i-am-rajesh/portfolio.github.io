<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Form Submit to Send Email</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
if(!empty($_POST["send"])) {
  $userEmail = $_POST["userEmail"];
	$userSubject = $_POST["userSubject"];
	$userMessage = $_POST["userMessage"];
	$toEmail = $_POST["rajeshcoder24@gmail.com"];
  
	$mailHeaders = "Subject " . $userSubject .
	"\r\n Email: ". $userEmail  . 
	"\r\n Subject: ". $userSubject  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userSubject, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>
<div class= "container">
<div class="row">
<form name="custom_form" class="contact-form padd-15" > 
        <div class="contact-inputs">
                                    
        <div class="contact-content">
             <input type="email" class="contact-input">
             <label for="" class="contact-label" id="userEmail">Email</label>
             <span></span>
        </div>
                        
                                    
        <div class="contact-content">
             <input type="text" class="contact-input">
             <label for="" class="contact-label" id="userSubject" >Subject</label>
             <span></span>
        </div>
                        
        <div class="contact-content contact-area">
              <textarea name=""  cols="30" rows="10" class="contact-input"></textarea>
              <label for="" class="contact-label" id="userMessage">Message</label>
              <span></span>
        </div>	
    <input type="submit" value="Send Message" name="send" class="btn btn-default">
        <?php if (! empty($message)) {?>
             <div class="success">
                <strong><?php echo $message; ?>	</strong>
             </div>
         <?php } ?>
    </div>
 </form>
        </div>
        </div>

</body>
</html>


