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
        $sql = "SELECT * FROM student WHERE Sid='$get_id'";
        $result = mysqli_query($conn,$sql) or die("Query unsuccessful");
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
       

    ?>
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value=""/>
          <input type="text" name="sname" value="<?php echo $row['SName']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['Saddress'];?>"/>
      </div>
      <div class="form-group">
          <?php 
            if($row['Sid'] == $get_id)
            {
                
            }
          <label>Class</label>
          <select name="sclass">
              <option value="" selected disabled>Select Class</option>
              <option value="1">BCA</option>
              <option value="2">BSC</option>
              <option value="3">B.TECH</option>
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
