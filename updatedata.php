<?php

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $username = "root";
    $password = "";
    $servername = "localhost";
    $conn = mysqli_connect($servername,$username,$password,"crud");
    if(!$conn)
    {
        die("connection Failed ".mysqli_connect_error());
    }
    $sql = "UPDATE student
            SET SName='{$_POST[sname]}',Saddress='{$_POST[saddress]}',SClass='{$_POST[sclass]}',SPhone='{$_POST[sphone]}'
            WHERE Sid='{$_POST[sid]}'";
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");
    header("Location:http://localhost/crud_html/index.php");
    mysqli_close($conn);
   

?>