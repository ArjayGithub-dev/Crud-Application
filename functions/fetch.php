<?php
    //fetching data
    $query = "SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsyllabus.Subject_ID = tblsubjects.Subject_ID"; //on my end in my mysql the name is "tblsubjects (with s)"
    $result = mysqli_query($dbc, $query); //using mysql_query
?>