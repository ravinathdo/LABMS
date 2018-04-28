<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getDBConnection() {
    /**/
    $servername = "localhost";
    $username = "root";
    $password = "123";
    $db = "lab_db";


// Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        return $conn;
    }
}

function setData($sql, $msg, $FLAG) {
    $conn = getDBConnection();
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        if ($FLAG)
            echo ' <div class="alert alert-success alert-dismissable msg-success">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              ' . $msg . ' </div>';
        return $last_id;
    } else {
        if ($FLAG)
            echo "Duplicate Entry Found";
    }

    mysqli_close($conn);
}

function getData($sql) {
    // Create connection
    $conn = getDBConnection();

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        return $result;
    } else {
        return FALSE;
    }

    mysqli_close($conn);
}

function setUpdate($sql, $msg, $FLAG) {
    $conn = getDBConnection();
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (mysqli_query($conn, $sql)) {
        if ($FLAG)
            echo ' <div class="alert alert-success alert-dismissable msg-success">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              ' . $msg . ' </div>';
    } else {
        if ($FLAG)
            echo "Error: In Update";
    }

    mysqli_close($conn);
}

function getTodatDate() {
    date_default_timezone_set("Asia/Colombo");
    return date("Y-m-d h:i:sa");
}


function getBaseUrl() 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 
    
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 
    
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    
    // return: http://localhost/myproject/
    return $protocol.$hostName.$pathInfo['dirname']."/";
}

?>