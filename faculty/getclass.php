<?php
    include('../conf/constant.php');
    $id=$_GET['id'];
?>
<form action="" method="post">
    class Name:
    <input type="text" name="cname">
    <input type="submit" name="submit">
</form>
<?php
    if(isset($_POST['submit']))
    {
        $a=$_POST['cname'];
    }
?>
<a href=<?php echo SURL."faculty/menu.php?id=$id&source=$a"?>>go to main page</a>