<?php
//include './model/EmailContent.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//email code
function sendEmail_labms($msg, $subject, $emailto) {
    $from = "From: admin@vps174528.vps.ovh.ca";
    // To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Create email headers
    $headers .= 'From: ' . $from . "\r\n" .
            'Reply-To: ' . $from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    // use wordwrap() if lines are longer than 70 characters
    //$msg = wordwrap($msg, 70);
    // send email
    if ($emailto != '') {
        mail($emailto, $subject, $msg, $headers);
    }
}


                               //send email
                                $to = "anjanathenuwara7@gmail.com";
                                $subject = "Test Invoice";
                                $msg = "Test Email Success";
                                sendEmail_labms($msg, $subject, $emailto);
                                
                                ?>