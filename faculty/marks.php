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

<h1>Add Marks</h1>
<br>

        
        

<form action="" method="POST">
    Select Exam:
    <br>
    <input type="radio" name="exam" value="CA1" checked>CA1
    <input type="radio" name="exam" value="CA2">CA2
    <input type="radio" name="exam" value="CA3">CA3
    <input type="radio" name="exam" value="sem">Semester
    <br><br>

    <table class="tbl-full">
    <tr>
        <th>Roll_no</th>
        <th>Marks</th>
    </tr>
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
?>

<?php
    
        $sql="SELECT * FROM `personal_info` WHERE `cname`='$cname';";
        $res = mysqli_query($conn,$sql);
        $x='c'.$x;

        if($res==true)
        {
            $count = mysqli_num_rows($res);                           
            if($count>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                    ?>
                                    <tr>
                                        <td><?php echo $row['roll_no'];?></td>
                                        <td><input type="text" name=<?php echo $row['roll_no'];?>>
                                        </td>                                 
                                    </tr>
                
                
                <?php
                }?>
                <input type="submit" name="Add"value="Add">
                <?php
            }
            
                            ?>
                
                </form>
                <?php
                    if($_POST['Add']){
                        $b=$_POST['exam'];

                        if($count>0)
                        {
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $r=$row['roll_no'];
                                $m=$_GET[$r];
                                $sql="UPDATE `$b` SET `$x` = '$m' WHERE `$b`.`roll_no` = '$r';";
                                echo $sql;
                                $res=mysqli_query($conn,$sql);
                            }
                        }

                    }
            }
        
    
?>


