<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
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
                        WHERE student.SClass = studentclass.Cid ORDER BY Sid ASC";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
            ?>
            <tr>
                <td><?php echo $row['Sid'] ?></td>
                <td><?php echo $row['SName'] ?></td>
                <td><?php echo $row['Saddress'] ?></td>
                <td><?php echo $row['Cname'] ?></td>
                <td><?php echo $row['SPhone'] ?></td>
                <td>
                    <a href="edit.php?id=<?php  echo $row['Sid']?>">Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['Sid'] ?>'>Delete</a>
                </td>
            </tr>
            <?php }
                }
                mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>
