<?php
    //include the database connection file
    include_once("../dbConnection/mysqlconfig_connection.php");
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        //checking empty fields
        if(empty($code) || empty($name)) {
            if(empty($code)) {
                echo "<font color='red'>Subject Code field is empty.</font><br/>";
            }
            if(empty($name)) {
                echo "<font color='red'>Subject Name field is empty.</font><br/>";
            }
        }
        else {
            //updating table
            mysqli_query($dbc, "UPDATE tblsubjects SET subject_Code='$code', subject_Name='$name' WHERE Subject_ID='$id'");
            //redirecting to the display page. In our case, it is index.php
            header("Location: ../index.php");
        }
    }
?>