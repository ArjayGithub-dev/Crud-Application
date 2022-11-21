<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Add Syllabus</title>
</head>
<body>
    <h1>Add Syllabus</h1>
    <a href="../index.php">Home</a>
    <br/><br/>
    <form action="../functions/addsyllabus.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>Syllabus Code</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td>Syllabus Author</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td>
                    <select name="subject"> <!--DROPDOWN--> 
                        <?php
                            include_once ("../dbConnection/mysqlconfig_connection.php");
                            $query = "SELECT * FROM tblsubjects";
                            $result = mysqli_query($dbc, $query);
                            while($res = mysqli_fetch_array($result)) {
                                echo "<option  value=\"".$res['Subject_ID']."\">";
                                echo $res['subject_Name'];
                                echo "</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
        </form>
</body>
</html>