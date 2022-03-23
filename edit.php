<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">
    <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $conn = mysqli_connect($servername,$username,$password,"crud");
        if(!$conn)
        {
            die("connection Failed ".mysqli_connect_error());
        }
        $get_id = $_GET['id'];
        $sql = "SELECT * FROM student JOIN studentclass WHERE Sid=$get_id AND SClass=Cid";
        $result = mysqli_query($conn,$sql) or die("Query unsuccessful");
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
       

    ?>
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['Sid'];?>"/>
          <input type="text" name="sname" value="<?php echo $row['SName']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['Saddress'];?>"/>
      </div>
      <div class="form-group">
        <label>Class</label>
        <select name="sclass">
          <?php 
            $sql_get_class = "SELECT * FROM studentclass";
            $get_class_result = mysqli_query($conn,$sql_get_class) or die("Second Query un");
            if(mysqli_num_rows($get_class_result) > 0)
            {
                while($get_class_rows = mysqli_fetch_assoc($get_class_result))
                {
                    
                    if($get_class_rows['Cid'] == $row['SClass'])
                    {
                        echo "<option value={$get_class_rows['Cid']} selected>{$get_class_rows['Cname']}</option>";
                    }
                    else
                    {
                        echo "<option value={$get_class_rows['Cid']}>{$get_class_rows['Cname']}</option>";
                    }
                }
            }
          ?>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['SPhone'];?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>

      <?php 
                
            }
        }
      mysqli_close($conn);
      ?>
    </form>
</div>
</div>
</body>
</html>
