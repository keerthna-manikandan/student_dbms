<?php
    include('menu.php');   
    $sql="SELECT * FROM faculty_pass WHERE id=$id";
    
    $res = mysqli_query($conn,$sql);
    if($res==true){
        $count = mysqli_num_rows($res);
        $rows=mysqli_fetch_assoc($res);
        $facid=$rows['faculty_id'];
    }
?>
<h1>Calender</h1>

<?php
    
    $z='c1facid';
    $a=$cname;
    $sql= "SELECT * FROM course WHERE `cname`='$a' AND `$z`='$facid';";
    $res=mysqli_query($conn,$sql);
    if($res==true){
        $x=1;
    }
    else{
        $z='c2facid';
        $sql= "SELECT * FROM course WHERE `cname`='$a' AND `$z`='$facid';";
        $res=mysqli_query($conn,$sql);
        if($res==true){
            $x=2;

        }
        else{
            $z='c3facid';
            $sql= "SELECT * FROM course WHERE `cname`='$a' AND `$z`='$facid';";
            $res=mysqli_query($conn,$sql);
            if($res==true){
                $x=3;

            }
            else{
               $z='c4facid';
                $sql= "SELECT * FROM course WHERE `cname`='$a' AND `$z`='$facid';";
                $res=mysqli_query($conn,$sql);
                if($res==true){
                    $x=4;

                } 
                else{
                    $z='c5facid';
                    $sql= "SELECT * FROM course WHERE `cname`='$a' AND `$z`='$facid';";
                    $res=mysqli_query($conn,$sql);
                    if($res==true){
                        $x=5;

                    }
                    else{
                        $z='c6facid';
                        $sql= "SELECT * FROM course WHERE `cname`='$a' AND `$z`='$facid';";
                        $res=mysqli_query($conn,$sql);
                        if($res==true){
                            $x=6;

                        }
                    }
                }
            }
        }
    }
    $sql="SELECT * FROM course WHERE cname='$cname';";
    $res= mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    $rows=mysqli_fetch_assoc($res);
?>
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




