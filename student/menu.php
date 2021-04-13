<?php
    $id = $_GET['id'];
    include('../conf/constant.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="sstyle.css?v=<?php echo time(); ?>">
    <title>Admin Login Page</title>
</head>

<body>
    <header>
        <div class="container">
            
            
            <div class="logo-container">
                <h3 class="logo">Faculty<span>Page</span></h3>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">View<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="#">Marks</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Faculty</a>
                                    </li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="#">Profile</a>
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
</body>

</html>