<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//email code
function sendEmail_labms($msg, $subject, $emailto) {
    $from = "From: labms@safedrive.lk";
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
