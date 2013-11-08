<?php

/**
 * Send contact form message
 */

#YOUR E-MAIL
define('TO', 'james@jamessacci.com');
##E-MAIL SUBJECT
define('SUBJECT', 'Contact Form From James Sacci Portfoliio Website');


$message = 'Message from: ' . $_POST['name'] . ' <'.$_POST['email'].'>' . "\n
Phone Number: " . $_POST['phone'] . "\n
Comments: " . $_POST['comments'];


if (mail(TO, SUBJECT, $message)){
	
    header( "Location: http://jamessacci.com/thank-you.html" );
}else{
	echo ('Error occurred while sending email');
}

/**
* end of file
*/
?> 