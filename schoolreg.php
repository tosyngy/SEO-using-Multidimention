<?php
ob_start();
session_start();
require_once 'db.php';

if(!isset($_SESSION['id'])){
   //echo 'you are already login';
    header("location: schoollog.php");
}else{
    //echo 'please login';
}
// insert to db
if(isset($_POST['login'])){
    $usr=$_POST['username'];
    $pwd=  md5($_POST['password']);
    $query= "insert into login (username,password) values('$usr','$pwd')";
    $stmt= mysqli_query($con, $query);
    if($stmt){
       echo 'data insert successful';
    }  else {
        echo 'data insertion error occur';
    }
}


//if (isset($_POST['login'])) {
//    $usr = $_POST['user'];
//    $pwd = md5($_POST['password']);
//    $query = "select id from login where username='$usr' and password='$pwd'";
//    $res = mysqli_query($con, $query);
//    if(mysqli_num_rows($res)>0){
//    while ($row = mysqli_fetch_assoc($res)) {
//        $_SESSION['id']= $row["id"];
//    } 
//    }else{
//        echo 'invalid username or password';
//    }
//}
//?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            testing optimal
        </title>
        <link href="http://localhost/search_engine_optimizer/css/schoollog.css" type="text/css" rel="stylesheet"/>
    </head>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <body>          
     <div class="container">
          <h1 class="h1">Student Registration</h1>
         <table>
             <?php
//// define variables and set to empty values
//$name = $password =  "";
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//  $name = test_input($_POST["name"]);
//  $password = test_input($_POST["password"]);
// 
//}
//
//function test_input($data) {
//  $data = trim($data);
//  $data = stripslashes($data);
//  $data = htmlspecialchars($data);
//  return $data;
//}
//?>
             <tr>
                 <td>
                     <label>
                         Username:
                     </label>
                 </td>
                 <td colspan="2">
                     <input type="text" name="username" placeholder="please enter your username here" required />                     
                 </td>
             </tr>
             <tr>
                 <td>
                     <label>
                         Password:
                     </label>
                 </td>
                 <td colspan="2">
                     <input type="password" name="password" placeholder="please enter your passwords here" required />                    
                 </td>
             </tr>
              </tr>
                    <tr>
                        <td colspan="2" class="btn-submit">
                            <button type="submit" value="login" name="login">Register</button>  
                        </td>                      
                    </tr>                   
         </table>
          <a href="logout.php">Please click here to logout.......</a> 
             <style>
a:link    {color:#eeeeee; background-color:transparent; text-decoration:none}
a:visited {color:#ffffff; background-color:transparent; text-decoration:none}
a:hover   {color:#ff0000; background-color:transparent; text-decoration:underline}
a:active  {color:#ff0000; background-color:transparent; text-decoration:underline}
</style> 
     </div>      
    </body>
     </form>
</html>


