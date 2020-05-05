<?php

$name = $_POST['Name'];
$surname= $_POST['Surname'];
$institution = $_POST['Institution/ Occupation'];
$field = $_POST['Field of Study'];
$member_email = $_POST['E-mail'];
$cell = $_POST['Phone'];
$interests = $_POST['Message'];

$email_from = 'hubertthedev@gmail.com';

$email_subject = "New Member Alert!";

$email_body = "Name: $name.\n"."Surname: $surname.\n"."Institution: $institution.\n"."Field Of Study: $field.\n"."E-mail: $member_email.\n"."Cell: $cell.\n"."Interests: $interests.\n";

$to = "muhokosociety@gmail.com";

$headers = "From: $email_from\r\n";

$headers .= "Reply-To: $member_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: registration.html");


?>