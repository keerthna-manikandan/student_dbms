<?php
    include('menu.php');   
?>

<h1>Course Details</h1>
<br>
<form action="" method="post">
class name: 
<input type="text" name="cname">
<input type="submit" name="submit" value="Submit"></form>
<?php
    if(isset($_POST['submit'])){
        $c=$_POST['cname'];
         $sql= "SELECT * FROM class_details WHERE cname='$c';";
    $res = mysqli_query($conn,$sql);
    if($res==TRUE){
    $count = mysqli_num_rows($res);
    $rows=mysqli_fetch_assoc($res);
    $sem=$rows['sem'];
    }
    }
?>
<br>
<h3>SEMESTER: <?php echo $sem;?></h3>
<br>
<form action="" method="POST">
    course 1 name: 
    <input type="text" name="c1n">
    <br><br>
    course 1 credits: 
    <input type="text" name="c1d">
    <br><br>
    course 1 faculty name: 
    <input type="text" name="c1f">
    <br><br>
    course 1 faculty ID: 
    <input type="text" name="c1fi">
    <br><br>
    course 2 name: 
    <input type="text" name="c2n">
    <br><br>
    course 2 credits: 
    <input type="text" name="c2d">
    <br><br>
    course 2 faculty name: 
    <input type="text" name="c2f">
    <br><br>
    course 2 faculty ID: 
    <input type="text" name="c2fi">
    <br><br>
    course 3 name: 
    <input type="text" name="c3n">
    <br><br>
    course 3 credits: 
    <input type="text" name="c3d">
    <br><br>
    course 3 faculty name: 
    <input type="text" name="c3f">
    <br><br>
    course 3 faculty ID: 
    <input type="text" name="c3fi">
    <br><br>
    course 4 name: 
    <input type="text" name="c4n">
    <br><br>
    course 4 credits: 
    <input type="text" name="c4d">
    <br><br>
    course 4 faculty name: 
    <input type="text" name="c4f">
    <br><br>
    course 4 faculty ID: 
    <input type="text" name="c4fi">
    <br><br>
    course 5 name: 
    <input type="text" name="c5n">
    <br><br>
    course 5 credits: 
    <input type="text" name="c5d">
    <br><br>
    course 5 faculty name: 
    <input type="text" name="c5f">
    <br><br>
    course 5 faculty ID: 
    <input type="text" name="c5fi">
    <br><br>
    course 6 name: 
    <input type="text" name="c6n">
    <br><br>
    course 6 credits: 
    <input type="text" name="c6d">
    <br><br>
    course 6 faculty name: 
    <input type="text" name="c6f">
    <br><br>
    course 6 faculty ID: 
    <input type="text" name="c6fi">
    <br><br>
    <input type="submit" name="submit2" value="Submit">
</form>
    </body>
    </html>
<?php
  if(isset($_POST['submit2']))
  {
    $a1=$_POST['c1n'];
    $b1=$_POST['c1d'];
    $c1=$_POST['c1f'];
    $d1=$_POST['c1fi'];
    $a2=$_POST['c2n'];
    $b2=$_POST['c2d'];
    $c2=$_POST['c2f'];
    $d2=$_POST['c2fi'];
    $a3=$_POST['c3n'];
    $b3=$_POST['c3d'];
    $c3=$_POST['c3f'];
    $d3=$_POST['c3fi'];
    $a4=$_POST['c4n'];
    $b4=$_POST['c4d'];
    $c4=$_POST['c4f'];
    $d4=$_POST['c4fi'];
    $a5=$_POST['c5n'];
    $b5=$_POST['c5d'];
    $c5=$_POST['c5f'];
    $d5=$_POST['c5fi'];
    $a6=$_POST['c6n'];
    $b6=$_POST['c6d'];
    $c6=$_POST['c6f'];
    $d6=$_POST['c6fi'];
    $sql="DELETE FROM `course` WHERE `course`.`cname` = '$c'";
    $res=mysqli_query($conn,$sql);

    $sql="INSERT INTO `course` (`cname`, `c1name`, `c1credit`, `c1fac`, `c1facid`, `c2name`, `c2credit`, `c2fac`, `c2facid`, `c3name`, `c3credit`, `c3fac`, `c3facid`, `c4name`, `c4credit`, `c4fac`, `c4facid`, `c5name`, `c5credit`, `c5fac`, `c5facid`, `c6name`, `c6credit`, `c6fac`, `c6facid`) VALUES ('$c', '$a1', '$b1', '$c1', '$d1', '$a2', '$b2', '$c2', '$d2', '$a3', '$b3', '$c3', '$d3', '$a4', '$b4', '$c4', '$d4', '$a5', '$b5', '$c5', '$d5', '$a6', '$b6', '$c6', '$d6')";
    $res=mysqli_query($conn,$sql);
  }
?>