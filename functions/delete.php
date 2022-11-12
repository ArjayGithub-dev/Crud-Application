<?php
    //including the datebase connection fie
    include_once("../dbConnection/mysqlconfig_connection.php");
    //getting id of the data from url
    $id = $_GET['id'];
    //deleting the row from table
    mysqli_query($dbc, "DELETE FROM tblsubjects WHERE Subject_ID='$id'");
    //redirecting to the display page
    header("Location: ../index.php");
?>