<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <?php
        //including the database connection file
        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($_POST['Submit'])) {
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
                //link to the previous page
                echo "<br/><a href='javascript:self.history.back();'>Go back</a>";
             }
             else {
                //if fields are not empty
                //insert data to database
                $result = mysqli_query($dbc, "INSERT INTO tblsubjects(subject_Code, subject_Name) VALUES('$code', '$name')");
                //display success message
                echo "<font color='green'>Data added successfully.";
                echo "<br/><a href='../index.php'>View Result</a>";
             }
        }
    ?>
</body>
</html>