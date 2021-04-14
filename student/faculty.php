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
        <th>S.No</th>
        <th>Course NAme</th>
        <th>Course Credits</th>
        <th>Faculty Name</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $rows['c1name']?></td>
        <td><?php echo $rows['c1credit']?></td>
        <td><?php echo $rows['c1fac']?></td>

    </tr>
    <tr>
        <td>2</td>
        <td><?php echo $rows['c2name']?></td>
        <td><?php echo $rows['c2credit']?></td>
        <td><?php echo $rows['c2fac']?></td>

    </tr>
    <tr>
        <td>3</td>
        <td><?php echo $rows['c3name']?></td>
        <td><?php echo $rows['c3credit']?></td>
        <td><?php echo $rows['c3fac']?></td>

    </tr>
    <tr>
        <td>4</td>
        <td><?php echo $rows['c4name']?></td>
        <td><?php echo $rows['c4credit']?></td>
        <td><?php echo $rows['c4fac']?></td>

    </tr>
    <tr>
        <td>5</td>
        <td><?php echo $rows['c5name']?></td>
        <td><?php echo $rows['c5credit']?></td>
        <td><?php echo $rows['c5fac']?></td>

    </tr>
    <tr>
        <td>6</td>
        <td><?php echo $rows['c6name']?></td>
        <td><?php echo $rows['c6credit']?></td>
        <td><?php echo $rows['c6fac']?></td>

    </tr>
</table>