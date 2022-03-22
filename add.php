<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php 
                    $username = "root";
                    $password = "";
                    $servername = "localhost";
                    $conn = mysqli_connect($servername,$username,$password,"crud");
                    if(!$conn)
                    {
                        die("connection Failed ".mysqli_connect_error());
                    }  
                    $sql = "SELECT * FROM studentclass";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {

                ?>
                <option value=<?php echo $row['Cid']; ?>><?php echo $row['Cname']; ?></option>
                <?php 
                        }
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
