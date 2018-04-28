<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$patient_id = $_GET['patient_id'];

unset($_SESSION['cart_items']);
header("Location:manager_new_inventory.php?patient_id=$patient_id");

?>