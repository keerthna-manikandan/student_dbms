<?php
    include('./menu.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM admin_pass WHERE id=$id";
    $res = mysqli_query($conn,$sql);
    if($res==true){
        $count = mysqli_num_rows($res);
        $rows=mysqli_fetch_assoc($res);
        $cname=$rows['cname'];
        
    }
    $sql="SELECT * FROM `course` WHERE `course`.`cname`='$cname';";
    $res = mysqli_query($conn,$sql);
    if($res==true){
        $count = mysqli_num_rows($res);
        $rows=mysqli_fetch_assoc($res);
    }
?>
<h1>Enter ExamDates</h1>
<br><br>
<form action="" method="post">
    <?php echo $rows['c1name'];?>:
    <input type="text" name="c1" > 
    <br><br>
    <?php echo $rows['c2name'];?>:
    <input type="text" name="c2" > 
    <br><br>
    <?php echo $rows['c3name'];?>:
    <input type="text" name="c3" > 
    <br><br>
    <?php echo $rows['c4name'];?>:
    <input type="text" name="c4" > 
    <br><br>
    <?php echo $rows['c5name'];?>:
    <input type="text" name="c5">
    <br><br>
    <?php echo $rows['c6name'];?>:
    <input type="text" name="c6"> 
    <input type="submit" name="submit"> 
</form>
<?php
    if(isset($_POST['submit']))
    {
        $a =$_POST['c1'];
        $b =$_POST['c2'];
        $c =$_POST['c3'];
        $d =$_POST['c4'];
        $e =$_POST['c5'];
        $f =$_POST['c6'];
    }
    $sql="UPDATE `course` SET `date1` = '$a', `date2` = '$b', `date3` = '$c', `date4` = '$d', `date5` = '$e', `date6` = '$f' WHERE `course`.`cname` = '$cname';";
    $res=mysqli_query($conn,$sql);
    if($res==true){
        echo"done";
    }
?>