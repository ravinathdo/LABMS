<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();


$patient_id = $_POST['patient_id'];

$profile_id = $_POST['profile_id'];
echo $profile_id;

$pieces = explode("|", $profile_id);
echo $pieces[0]; // id
echo $pieces[1]; // name
echo $pieces[2]; // fee


$id = $pieces[0];;
$itemName = $pieces[1];;
$price = $pieces[2];;


//---------center
$center_id = $_POST['center_id'];
echo $center_id;

$centerdata = explode("|", $center_id);
$cid   = $centerdata[0];
$cname = $centerdata[1];


if (!isset($_SESSION['cart_items'])) {
    $itemArray = array();
    $_SESSION['cart_items'] = $itemArray;
    $_SESSION['total_price'] = 0;
}




$fid = isDuplicate($id);
if ($fid >= 0) {
    //remove exsisting item form the session array
    $itemArray = $_SESSION['cart_items'];
    unset($itemArray[$id]); //remove index
    $itemArray2 = array_values($itemArray); //reindex array
    $_SESSION['cart_items'] = $itemArray2;
}


//$movie = array("id" => $id, "name" => $itemName, "price" => $price);
$movie = array("id" => $id, "name" => $itemName, "price" => $price , "centerid" => $cid , "centername" => $cname );

$total = $_SESSION['total_price'];
$priceForMove =  $price;
$_SESSION['total_price'] = $total + $priceForMove;


$itemArray = $_SESSION['cart_items']; //get available array items from the session 
array_push($itemArray, $movie); //push $movie array element into $itemArray
$_SESSION['cart_items'] = $itemArray;

//this will shows how the elements store in the multidemantional array         
//print_r($itemArray);
header("Location:manager_new_inventory.php?patient_id=$patient_id");

function isDuplicate($id) {
    $fid = -1;
    //is same movie selected
    $itemArray = $_SESSION['cart_items'];
    $itemArraylength = count($itemArray);

    for ($x = 0; $x < $itemArraylength; $x++) {

        if ($id == $itemArray[$x]["id"]) {

            //rearrage total for substract from the total 
            $itemPrice =  $itemArray[$x]["price"];
            $newTotal = $_SESSION['total_price'] - $itemPrice;
            $_SESSION['total_price'] = $newTotal;

            return $x;
        }
    }
    return $fid;
}

?>
