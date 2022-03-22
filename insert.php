<?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $conn = mysqli_connect($servername,$username,$password,"crud");
    if(!$conn)
    {
        die("connection Failed ".mysqli_connect_error());
    }

    // $sql = "INSERT into student(SName,Saddress,SClass,SPhone)
    //         VALUES('Adarsh','116/209 qewew','B Tech','9876543210')";

    // if(!mysqli_query($conn,$sql))
    // {
    //     die("Query unsuccesful ".mysqli_connect_error());  
    // }
    $sql = "INSERT into student(SName,Saddress,SClass,SPhone)
            VALUES('Adarsh123','116/209 qewew','B Tech','9876543210')";

    if(!mysqli_query($conn,$sql))
    {
        die("Query unsuccesful ".mysqli_connect_error());  
    }
    mysqli_close($conn);
?>