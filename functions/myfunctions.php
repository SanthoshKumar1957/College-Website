<?php
// session_start();
include('../config/connection.php');

function getAll($table)
{
    global $conn;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($conn, $query);
}

function getAnn($table, $name)
{
    global $conn;
    $query = "SELECT * FROM $table WHERE club = '$name'";
    return $query_run = mysqli_query($conn, $query);
    
}

function getDetails($table, $name)
{
    global $conn;
    $query = "SELECT * FROM $table WHERE organiser = '$name'";
    return $query_run = mysqli_query($conn, $query);

}

function getByID($table, $id)
{
    global $conn;
    $query = "SELECT * FROM $table WHERE id = '$id' ";
    // return $query;
    return $query_run = mysqli_query($conn, $query);

}


function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}

?>