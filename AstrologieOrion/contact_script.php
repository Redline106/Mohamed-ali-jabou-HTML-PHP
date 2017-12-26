<?PHP
$email = $_POST["email"];
$to = "ali_jabou@hotmail.com";
$subject = "New Email Address for Mailing List";
$headers = "From: $email\n";
$message =$_POST["message"] ;

$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: ali_jabou@hotmail.com\n";
$usermessage = "Thank you for subscribing to our mailing list.";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
print "votre message a ete envoye avec succes"
?>

