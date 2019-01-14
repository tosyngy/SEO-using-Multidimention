<?php
ob_start();
session_start();
require_once 'db.php';

if (isset($_SESSION['id'])) {
    //echo 'you are already login';
    header("location: schoolreg.php");
} else {
    //echo 'please login';
}
if (isset($_POST['login'])) {
    $usr = $_POST['username'];
    $pwd = md5($_POST['password']);
    $query = "select id from login where username='$usr' and password='$pwd'";
    $res = mysqli_query($con, $query);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $_SESSION['id'] = $row["id"];
            header("location: ");
        }
    } else {
        echo 'invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            testing optimal
        </title>
        <link href="http://localhost/search_engine_optimizer/css/schoollog.css" type="text/css" rel="stylesheet"/>
    </head>
    <form method="post" action="">
        <body>          
            <div class="container">
                <h1 class="h1">Student Login</h1>
                <table>
                    <tr>
                        <td>
                            <label>
                                Username:
                            </label>
                        </td>
                        <td colspan="2">
                            <input type="text" name="username" placeholder="please enter your username here" />
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Password:
                            </label>
                        </td>
                        <td colspan="2">
                            <input type="password" name="password" placeholder="please enter your passwords here" />
                            
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td colspan="2" class="btn-submit">
                            <button type="submit" value="login" name="login">Login</button>  
                        </td>                      
                    </tr>
                </table>               
            </div>         
        </body>
    </form>
</html>

