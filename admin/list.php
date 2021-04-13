<?php
    include('menu.php');   
?>
<h1>List of students in the class!</h1>
<br>
<form action="" method="post">
class name: 
<input type="text" name="cname">
<input type="submit" name="submit" value="Submit"></form>
<?php
    if(isset($_POST['submit'])){
        $c=$_POST['cname'];
    
?>

<br><br>
<table class="tbl-full">
    <tr>
        <th>Roll_no</th>
        <th>Name</th>
        <th>Email ID</th>
        <th>Phone number</th>
        <th>Residential status</th>
      

    </tr>
      <?php 
  
                        $sql= "SELECT * FROM personal_info WHERE cname='$c';";
                        $res= mysqli_query($conn,$sql);
                        if($res==TRUE){
                            $count = mysqli_num_rows($res);
                            
                            if($count>0)
                            {
                                while($row=mysqli_fetch_assoc($res)){

                                    ?>
                                    <tr>
                                        <td><?php echo $row['roll_no'];?></td>
                                        <td><?php echo $row['fname']." ".$row['lame'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['phno'];?></td>
                                        <td><?php echo $row['resident'];?></td>
                                      
                                    </tr>

                                    <?php
                               
                                }
                            }
                            else
                            {

                            }
                        }
                    }
                    ?> 

            </table>
    </body>
</html>