<!-- <?php
// check if fields passed are empty
##if(empty($_POST['name'])  		||
#   empty($_POST['email']) 		||
#   empty($_POST['message'])	||
#   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
#	echo "No arguments Provided!";
#	return false;
   }
#$name = $_POST['name'];
#$email_address = $_POST['email'];
#$message = $_POST['message'];
// create email body and send it
#$to = 'ewhitaker524@gmail.com'; // put your email address here
#$email_subject = "Contact form submitted by:  $name";
#$email_body = "You have received a new message. \n\n".
#				  " Here are the details:\n \nName: $name \n ".
#				  "Email: $email_address\n Message: \n $message";
#$headers = "From: ewhitaker524@gmail.com\n";
// Since this email form will be generated from your server. The From email address will be best using something like this noreply@yourdomain.com
#$headers .= "Reply-To: $email_address";
#mail($to,$email_subject,$email_body,$headers);
#return true;

<form method="POST" action="https://formspree.io/ewhitaker524@gmail.com">
  <input type="email" name="email" placeholder="Your email">
  <textarea name="message" placeholder="Your message"></textarea>
  <button type="submit">Send</button>
</form>
