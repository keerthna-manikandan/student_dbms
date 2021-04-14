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
<h1>Search</h1>
<form action="" method="post">
    Roll Number:
    <input type="text" name="roll">
    <br><br>
    <input type="submit" name="submit">
</form>

<?php
    if(isset($_POST['submit']))
    {
        $r=$_POST['roll'];
    }
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
    $x='c'.$x;
    $sql="SELECT * FROM ca1 WHERE roll_no='$r';";
    $res=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    $rows=mysqli_fetch_assoc($res);
    $ca1=$rows[$x];
    $sql="SELECT * FROM ca2 WHERE roll_no='$r';";
    $res=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    $rows=mysqli_fetch_assoc($res);
    $ca2=$rows[$x];
    $sql="SELECT * FROM ca3 WHERE roll_no='$r';";
    $res=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    $rows=mysqli_fetch_assoc($res);
    $ca3=$rows[$x];
    $sql="SELECT * FROM sem WHERE roll_no='$r';";
    $res=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    $rows=mysqli_fetch_assoc($res);
    $sem=$rows[$x];
?>
<br>
ca1 marks:<?php echo $ca1;?>
<br><br>
ca2 marks:<?php echo $ca2;?>
<br><br>
ca3 marks:<?php echo $ca3;?>
<br><br>
sem marks:<?php echo $sem;?>
