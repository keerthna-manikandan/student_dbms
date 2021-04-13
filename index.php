<?php
     include('./conf/constant.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>DBMS Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<section class="login-form">
	<img class="wave" src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<img src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/avatar.svg">
				<h2 class="title">Welcome</h2>
				<input type="radio" name="choose" value="admin" checked> Administrator&nbsp;
        		<input type="radio" name="choose" value="faculty">Facullty&nbsp; 
        		<input type="radio" name="choose" value="student">Student
				<br><br>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="uid" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="pwd" class="input">
            	   </div>
            	</div>
				<br><br>
				<div class="button-wrapper">
    				<button class="modalButton accept-btn" data-popup="accept" type="submit" name="submit">Accept</button>
				</div>
            </form>
        </div>
    </div>
</section>
<script type="text/javascript" src="main.js"></script>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
            $choice=$_POST['choose'];
            $cname = $_POST['uid'];
            $pass = ($_POST['pwd']);

            if($choice=='admin')
            {
                $sql="SELECT * FROM admin_pass WHERE cname = '$cname' AND password='$pass'";
                $res = mysqli_query($conn,$sql);
                if($res == true)
                {
                    $count = mysqli_num_rows($res);
                    if($count==1){
                        $_SESSION['cname'] = $cname;
                        $_SESSION['login'] = "<div>Login Successful</div>";
                        $rows=mysqli_fetch_assoc($res);
                        $id=$rows['id'];
                        header('location: '.SURL."admin/menu.php?id=$id");
                    }
                    else{
                        $_SESSION['login'] = "<div class='error'>Login Failed</div>";
                        header('location: '.SURL.'index.php');
                    }
                }
            
            }
            if($choice=='faculty')
            {
                $sql="SELECT * FROM faculty_pass WHERE faculty_id = '$cname' AND password='$pass'";
                $res = mysqli_query($conn,$sql);
                if($res == true)
                {
                    $count = mysqli_num_rows($res);
                    if($count==1){
                        $_SESSION['facid'] = "<h1></h1>";
                        $_SESSION['login'] = "<div>Login Successful</div>";
                         $rows=mysqli_fetch_assoc($res);
                        $id=$rows['id'];
                        header('location: '.SURL."faculty/menu.php?id=$id");
                    }
                    else{
                        $_SESSION['login'] = "<div class='error'>Login Failed</div>";
                        header('location: '.SURL.'index.php');
                    }
                } 
            }
            if($choice=='student')
            {
                $sql="SELECT * FROM student_pass WHERE roll_no = '$cname' AND pass='$pass'";
                $res = mysqli_query($conn,$sql);
                if($res == true)
                {
                    $count = mysqli_num_rows($res);
                    if($count==1){
                        $_SESSION['studid'] = $cname;
                        $_SESSION['login'] = "<div>Login Successful</div>";
                        
                        header('location: '.SURL.'student/menu.php');
                    }
                    else{
                        $_SESSION['login'] = "<div class='error'>Login Failed</div>";
                        header('location: '.SURL.'index.php');
                    }
                }
                
            }
        
    }
?>