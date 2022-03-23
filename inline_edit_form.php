<?php
   if(isset($_POST['showbtn']))
   {
       $username = "root";
       $password = "";
       $servername = "localhost";
       $conn = mysqli_connect($servername,$username,$password,"crud");
       if(!$conn)
       {
           die("connection Failed ".mysqli_connect_error());
       }
       $sql = "SELECT * FROM student 
               JOIN studentclass 
               WHERE student.SClass=studentclass.Cid AND student.Sid={$_POST['sid']}";
       $result = mysqli_query($conn,$sql) or die("Unsuccessful Query");
       if(mysqli_num_rows($result)>0)
       {
           $data = array();
           while($row = mysqli_fetch_assoc($result))
           {
                
               echo "<pre>";
               print_r($row);
               echo "</pre>";     
           }
           $data = $row; 
       }
       header("Location:http://localhost/crud_html/update.php");
       mysqli_close($conn);
    }
   
     

?>