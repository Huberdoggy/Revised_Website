<?php

$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("\r","\n"),array(" "," "),$name);
$email = filter_var(trim($_POST["email"]),FILTER_SANITIZE_EMAIL);
$message = trim($_POST["message"]);


//TODO -- why does this throw error ??
if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: https://www.kylejamesmyfilenames.com/index.php?success=-1#inform-user");
  exit;
}

$recipient = "kyleyqps@kylejamesmyfilenames.com";

$subject = "New contact from $name";

$email_content = "Name: $name\n";
$email_content .= "Email: $email\n\n";
$email_content .= "Message:\n$message\n";

$email_headers = "From: $name <$email>";

mail($recipient, $subject, $email_content, $email_headers);

//Redirect with success code
header("Location: https://www.kylejamesmyfilenames.com/index.php?success=1#inform-user");

?>