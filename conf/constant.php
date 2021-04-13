<?php
        //session_start
        session_start();
        //create contants to store repeating value
        define('SURL','http://localhost/student-dbms/');
        define('LOCALHOST','localhost');//constant is created with capital letters
        define('ROOT', 'root');
        $conn = mysqli_connect(LOCALHOST,ROOT,'mohanamani') or die(mysqli_error());
        $db_select = mysqli_select_db($conn,'student_dbms') or die(mysqli_error());
  
?>      