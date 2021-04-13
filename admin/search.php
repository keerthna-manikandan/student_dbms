<?php
    include('menu.php');   
    $id=$_GET['id'];

    $sql="SELECT * FROM admin_pass WHERE id=$id";
    $res = mysqli_query($conn,$sql);
    if($res==true){
        $count = mysqli_num_rows($res);
        $rows=mysqli_fetch_assoc($res);
        $cname=$rows['cname'];
    }

        ?>
    <form action="" method="POST">
        Roll number:
        <input type="text" name="rno">
        <input type="submit" name="submit" value="Search">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $roll=$_POST['rno'];
            
            $sql="SELECT * FROM `personal_info` WHERE `personal_info`.`roll_no`='$roll';";
            $res = mysqli_query($conn,$sql);
            if($res==true){
                $count = mysqli_num_rows($res);
                $rows=mysqli_fetch_assoc($res);
            }
        }
    ?>

    <br><br>
    Name:
    <?php echo $rows['fname'].' '.$rows['lame'];?>
    <br>
    Email:
    <?php echo $rows['email'];?>
    <br>
    Phone Number:
    <?php echo $rows['phno'];?>
    <br>
    Father Name:
    <?php echo $rows['father'];?>
    <br>
    Mother Name:
    <?php echo $rows['mother'];?>
    <br>
    Date of birth:
    <?php echo $rows['dob'];?>
    <br>
    Religion:
    <?php echo $rows['religion'];?>
    <br>
    Community:
    <?php echo $rows['community'];?>
    <br>
    Residential status:
    <?php echo $rows['resident'];?>
    <br>
    ADDRESS:
    
    <?php echo $rows['street'].','.$rows['identity'];?>
    <br>
    <?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$rows['city'].','.$rows['country'];?>
    <br>
    <?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$rows['pin'];?>
    <br>
    Adhar Number:
    <?php echo ''.$rows['adhar'];?>
<?php
    $sql="SELECT * FROM `sem_marks` WHERE `sem_marks`.`roll_no`='$roll';";
    $res = mysqli_query($conn,$sql);
    if($res==true){
        $count = mysqli_num_rows($res);
        $rows=mysqli_fetch_assoc($res);
    }
?>
    <br>
    Marks Until Last Semester:
    <?php echo $rows['until'];?>
