<?php include 'header.php'; 
    if(isset($_POST['deletebtn']))
    {   
        $get_id = $_POST['sid'];
        $username = "root";
        $password = "";
        $servername = "localhost";
        $conn = mysqli_connect($servername,$username,$password,"crud");
        if(!$conn)
        {
            die("connection Failed ".mysqli_connect_error());
        }
        $sql = "DELETE FROM student WHERE Sid = $get_id";
        $result = mysqli_query($conn,$sql) or die("Unsuccessful Query");
        header("Location: http://localhost/crud_html/index.php");
        mysqli_close($conn);
    }
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
