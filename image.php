<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data" action="">
            <input type="file" name="pix" /> 
            <button type="submit" name="upload">Upload</button>
        </form>
        <?php
        $pixurl= "image/".  date("ymdhis").".png";
        if(isset($_POST["upload"])){
        if($_FILES['pix']['size'] <  (1024*1024) &&  strpos($_FILES['pix']['type'], "image")>-1){
        move_uploaded_file($_FILES["pix"]["tmp_name"],$pixurl);
        }  else {
            echo "<script>alert('invalid file or file too large')</script>";  
        }
        }
        //print_r($_FILES)
        ?>
        <img src="<?php echo $pixurl;?>"/>
    </body>
</html>
<!--<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<img src="image/10455919_10203432677771623_2022621900407579031_n.jpg"/>
    </body>
</html>-->
