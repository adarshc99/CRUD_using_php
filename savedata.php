<?php
    
    $SName = $_POST['sname'];
    $SAddress = $_POST['saddress'] ;
    $SClass = $_POST['class'];
    $SPhone = $_POST['sphone'];

    // echo $SName."</br>";
    // echo $SAddress."</br>";
    // echo $SClass."</br>";
    // echo $SPhone."</br>";
    $conn = mysqli_connect("localhost","root","","crud");
    $sql = "INSERT INTO student(SName,Saddress,SClass,SPhone)
            VALUES('$SName','$SAddress','$SClass','$SPhone')";
    $result = mysqli_query($conn,$sql) or die("QUery not resoved");
    header("Location:http://localhost/crud_html/index.php");
    mysqli_close($conn);
   
   
?>