<?php
    include('../conf/constant.php');
    $id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="astyle.css?v=<?php echo time(); ?>">
    <title>Admin Login Page</title>
</head>

<body>
    <header>
        <div class="container">
           
            
            <div class="logo-container">
                <h3 class="logo">Admin<span>Page</span></h3>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">Add<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href=<?php echo SURL."admin/personal.php?id=$id"?>>Personal</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href=<?php echo SURL."admin/academic.php?id=$id"?>>Academic</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href=<?php echo SURL."admin/course.php?id=$id"?>>Course</a>
                                    </li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: .6s">
                            <a href=<?php echo SURL."admin/list.php?id=$id"?>>List</a>
                        </li>
            
                        <li class="nav-link" style="--i: 1.35s">
                            <a href=<?php echo SURL."admin/search.php?id=$id"?>>Search</a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="#">Calender</a>
                        </li>
                    </ul>
                </div>

                <div class="log-sign" style="--i: 1.8s">
                    <a href="../index.php" class="btn solid">Log Out</a>
                </div>
                <?php if(isset($_SESSION['classname'])){
                    echo $_SESSION['classname'];
                    unset($_SESSION['classname']);//removes the message
                }?>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>
  <main>
        <section>
            <div class="overlay"></div>
        </section>
    </main>
          

