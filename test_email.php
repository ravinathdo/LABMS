<?php
include './model/EmailContent.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

                               //send email
                                $to = "anjanathenuwara7@gmail.com";
                                $subject = "Test Invoice";
                                $msg = "Test Email Success";
                                sendEmail_labms($msg, $subject, $emailto);