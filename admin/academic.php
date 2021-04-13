<?php
    include('menu.php');   
?>
<h1>
    Academic Details of the Students
</h1>
<br>
<form action="" method="post">
class name: 
<input type="text" name="cname">
<input type="submit" name="submit" value="Submit"></form>
<?php
    if(isset($_POST['submit'])){
        $c=$_POST['cname'];
    }
?>
<br><br>
<table class="tbl-full">
    <tr>
        <th>roll_no</th>
        <th>Sem1</th>
        <th>Sem2</th>
        <th>Sem3</th>
        <th>Sem4</th>
        <th>Sem5</th>
        <th>Sem6</th>
        <th>Sem7</th>
        <th>Sem8</th>
        <th>CGPA until now</th>

    </tr>
    <?php 
                        $sql= "SELECT * FROM sem_marks WHERE cname='$c';";
                        $res = mysqli_query($conn,$sql);

                        if($res==TRUE){
                            $count = mysqli_num_rows($res);
                            
                            if($count>0)
                            {
                                while($row=mysqli_fetch_assoc($res)){

                                    ?>
                                    <tr>
                                        <td><?php echo $row['roll_no'];?></td>
                                        <td><?php echo $row['sem1'];?></td>
                                        <td><?php echo $row['sem2'];?></td>
                                        <td><?php echo $row['sem3'];?></td>
                                        <td><?php echo $row['sem4'];?></td>
                                        <td><?php echo $row['sem5'];?></td>
                                        <td><?php echo $row['sem6'];?></td>
                                        <td><?php echo $row['sem7'];?></td>
                                        <td><?php echo $row['sem8'];?></td>
                                        <td><?php echo $row['until'];?></td>
                                        
                                    </tr>

                                    <?php
                               
                                }
                            }
                            else
                            {

                            }
                        }
                    ?> 

</table>
                    </body>
                    </html>