<?php
    include('menu.php');   
    $sql="SELECT * FROM student_pass WHERE id=$id";
    
    $res = mysqli_query($conn,$sql);
    if($res==true){
        $count = mysqli_num_rows($res);
        $rows=mysqli_fetch_assoc($res);
        $roll=$rows['roll_no'];
    }
    $sql="SELECT * FROM course WHERE cname='$c';";
    $res = mysqli_query($conn,$sql);
    if($res==true){
        $count = mysqli_num_rows($res);
        $rows=mysqli_fetch_assoc($res);
    }
?>
<h1>Calender</h1>
<br><br>
<table class="tbl-full">
    <tr>
        <th>Course Name</th>
        <th>Date</th>
    </tr>
    <tr>
        <td><?php echo $rows['c1name'];?></td>
        <td><?php echo $rows['date1'];?></td>
    </tr>
    <tr>
        <td><?php echo $rows['c2name'];?></td>
        <td><?php echo $rows['date2'];?></td>
    </tr>
    <tr>
        <td><?php echo $rows['c3name'];?></td>
        <td><?php echo $rows['date3'];?></td>
    </tr>
    <tr>
        <td><?php echo $rows['c4name'];?></td>
        <td><?php echo $rows['date4'];?></td>
    </tr>
    <tr>
        <td><?php echo $rows['c5name'];?></td>
        <td><?php echo $rows['date5'];?></td>
    </tr>
    <tr>
        <td><?php echo $rows['c6name'];?></td>
        <td><?php echo $rows['date6'];?></td>
    </tr>
</table>