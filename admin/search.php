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
    echo $cname;
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
            echo $roll;
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