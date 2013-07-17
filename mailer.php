<?php

/**
 * Send contact form message
 */

#YOUR E-MAIL
define('TO', 'james.sacci@prowebinnovations.com');
##E-MAIL SUBJECT
define('SUBJECT', 'Contact Form From PWI Website');


$message = 'Message from: ' . $_POST['name'] . ' <'.$_POST['email'].'>' . "\n
Phone Number: " . $_POST['phone'] . "\n
Message: " . $_POST['comments'];


if (mail(TO, SUBJECT, $message)){
	
    header( "." );
}else{
	echo ('Error occurred while sending email');
}

/**
* end of file
*/
?> 