<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();


if ($_SESSION['user']['role_code'] == 'PATIENT') {
    session_destroy();
    header("Location:login.php");
} else {
    session_destroy();
    header("Location:admin.php");
}
?>
