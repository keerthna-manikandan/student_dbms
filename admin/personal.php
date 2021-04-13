<?php
    include('menu.php');   
?>
    <h1>Add Personal Information of the Student</h1>
    <form action="" method="POST">
        <br> <br>
        class name: 
        <input type="text" name="cname">
        <br><br>
        Roll Number:
        <input type="text" name="rno">
        <br><br>
        First Name: 
        <input type="text" name="fname" >
        <br><br>
        Last Name: 
        <input type="text" name="lname" >
        <br><br>
        Email:
        <input type="text" name="email">
        <br><br>
        Phone Number:
        <input type="text" name="phno">
        <br><br>
        Mother Name:
        <input type="text" name="mname">
        <br><br>
        Father Name:
        <input type="text" name="faname">
        <br><br>
        Gaurdian Phone Number:
        <input type="text" name="gphno">
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female" checked> Female&nbsp;
        <input type="radio" name="gender" value="male">Male&nbsp; 
        <input type="radio" name="gender" value="other">Other
        <br><br>
        Blood
        <input type="radio" name="blood" value="O-ve" checked>O-ve
        <input type="radio" name="blood" value="O+ve">O+ve
        <input type="radio" name="blood" value="A-ve">A-ve
        <input type="radio" name="blood" value="A+ve">A+ve
        <input type="radio" name="blood" value="B-ve">B-ve
        <input type="radio" name="blood" value="B+ve">B+ve
        <input type="radio" name="blood" value="AB-ve">AB+ve
        <input type="radio" name="blood" value="AB+ve">AB-ve
        <br><br>
        Date Of Birth:
        <input type="text" name="dob">
        <br><br>
        Religion:
        <input type="text" name="rel">
        <br><br>
        Community:
        <input type="text" name="comm">
        <br><br>
        Nationality:
        <input type="text" name="nat">
        <br><br>
        Resident-Status:
        <input type="text" name="resi">
        <br><br>
        Adhar:
        <input type="text" name="adhar">
        <br><br>
        <h4>Address</h4>
        <br>
        Address line 1:
        <input type="text" name="ad1">
        <br><br>
        Address line 1:
        <input type="text" name="ad2">
        <br><br>
        City:
        <input type="text" name="city">
        <br><br>
        Country:
        <input type="text" name="coun">
        <br><br>
        Pincode:
        <input type="text" name="pin">
        <br><br>
        <h3>Schooling</h3>
        <br>
        <h4>10th Standard</h4>
        <br>
        School Name:
        <input type="text" name="tens">
        <br><br>
        Grade in percentage:
        <input type="text" name="teng">
        <br><br>
        <h4>12th Standard</h4>
        <br>
        School Name:
        <input type="text" name="twes">
        <br><br>
        Grade in percentage:
        <input type="text" name="tweg">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

<h3>
    <?php
        if(isset($_POST['submit']))
        {
            $a=$_POST['cname'];
           
            $c=$_POST['rno'];
            $d=$_POST['fname'];
            $e=$_POST['lname'];
            $f=$_POST['email'];
            $g=$_POST['phno'];
            $h=$_POST['faname'];
            $i=$_POST['mname'];
            $j=$_POST['gphno'];
            $k=$_POST['gender'];
            $l=$_POST['blood'];
            $m=$_POST['dob'];
            $n=$_POST['rel'];
            $o=$_POST['comm'];
            $p=$_POST['nat'];
            $q=$_POST['resi'];
            $r=$_POST['adhar'];
            $s=$_POST['ad1'];
            $t=$_POST['ad2'];
            $u=$_POST['city'];
            $v=$_POST['coun'];
            $w=$_POST['pin'];
            $s1=$_POST['tens'];
            $s2=$_POST['teng'];
            $s3=$_POST['twes'];
            $s4=$_POST['tweg'];

            $sql="INSERT INTO `personal_info` (`cname`, `roll_no`, `fname`, `lame`, `email`, `phno`, `father`, `mother`, `gaurd_phno`, `gender`, `blood`, `dob`, `religion`, `community`, `nationality`, `resident`, `adhar`,`street`,`identity`,`city`,`country`,`pin`) VALUES ('$a', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r','$s','$t','$u','$v','$w')";
            $res = mysqli_query($conn,$sql);
            if($res==true)
            {
                $sql="INSERT INTO `schooling` (`roll_no`, `school10`, `grade10`, `school12`, `grade12`) VALUES ('$c', '$s1', '$s2', '$s3', '$s4')";
                $res = mysqli_query($conn,$sql);
                if($res==true){
                    echo "done";
                }
            }
        }
        
    ?>
</h3>

    
</body>
</html>