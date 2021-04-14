<?php
    include('menu.php');   
    $sql="SELECT * FROM student_pass WHERE id=$id";
    
    $res = mysqli_query($conn,$sql);
    if($res==true){
        $count = mysqli_num_rows($res);
        $rows=mysqli_fetch_assoc($res);
        $r=$rows['roll_no'];
    }
    $sql="SELECT * FROM course WHERE cname='$c';";
    $res=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    $rows=mysqli_fetch_assoc($res);

?>
<table class="tbl-full">
    <tr>
        <th>Exam Name</th>
        <th><?php echo $rows['c1name'];?></th>
        <th><?php echo $rows['c2name'];?></th>
        <th><?php echo $rows['c3name'];?></th>
        <th><?php echo $rows['c4name'];?></th>
        <th><?php echo $rows['c5name'];?></th>
        <th><?php echo $rows['c6name'];?></th>
    </tr>

<?php
    $sql="SELECT * FROM ca1 WHERE roll_no='$r';";
    $res=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    $rows=mysqli_fetch_assoc($res);
    ?>
    <tr>
        <td>CA1</td>
        <td><?php echo $rows['c1'];?></td>
        <td><?php echo $rows['c2'];?></td>
        <td><?php echo $rows['c3'];?></td>
        <td><?php echo $rows['c4'];?></td>
        <td><?php echo $rows['c5'];?></td>
        <td><?php echo $rows['c6'];?></td>
    </tr>
    <?php
    
    $sql="SELECT * FROM ca2 WHERE roll_no='$r';";
    $res=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    $rows=mysqli_fetch_assoc($res);
    ?>
    <tr>
        <td>CA2</td>
        <td><?php echo $rows['c1'];?></td>
        <td><?php echo $rows['c2'];?></td>
        <td><?php echo $rows['c3'];?></td>
        <td><?php echo $rows['c4'];?></td>
        <td><?php echo $rows['c5'];?></td>
        <td><?php echo $rows['c6'];?></td>
    </tr>
    <?php
    
    $sql="SELECT * FROM ca3 WHERE roll_no='$r';";
    $res=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    $rows=mysqli_fetch_assoc($res);?>
    <tr>
        <td>CA3</td>
        <td><?php echo $rows['c1'];?></td>
        <td><?php echo $rows['c2'];?></td>
        <td><?php echo $rows['c3'];?></td>
        <td><?php echo $rows['c4'];?></td>
        <td><?php echo $rows['c5'];?></td>
        <td><?php echo $rows['c6'];?></td>
    </tr>
    <?php
    
    $sql="SELECT * FROM sem WHERE roll_no='$r';";
    $res=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    $rows=mysqli_fetch_assoc($res);
    
?>
<tr>
        <td>SEMESTER</td>
        <td><?php echo $rows['c1'];?></td>
        <td><?php echo $rows['c2'];?></td>
        <td><?php echo $rows['c3'];?></td>
        <td><?php echo $rows['c4'];?></td>
        <td><?php echo $rows['c5'];?></td>
        <td><?php echo $rows['c6'];?></td>
    </tr>
</table>