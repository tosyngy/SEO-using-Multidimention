
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo "EMPLOYEE RESULT" ?></title>
        <link href="http://localhost/search_engine_optimizer/css/Employee.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <form method="post"  action="">
            <div class="container">
                <style>
                    table,tr,td{
                        width: 100%;
                        border: solid 1px #fff
                    }
                    tr{
                        /*                         background-color: coral;*/
                        height:30px
                    }
                    td{
                        width: 25%;
                        padding: 1px;
                        height:40px; 
                    }
                </style>
                <h1> <span> <?php echo $_POST["header"]; ?><br></span></h1>
                <table>
                    <tr>
                        <td>
                            <label > 
                                NAME:  
                            </label>
                        </td>         
                        <td colspan="2" class="cols">
                            <span> <?php echo $_POST["Surname"] . " " . $_POST["othernames"]; ?><br></span>
                        </td>  
                        <td rowspan="4">
                            <div class="imagediv">
                                <div class="image">                                           
                                    <span> <img class="imgsrc" src="<?php echo $_POST["passme"]; ?>"/><br></span>
                                </div>                               
                            </div>
                        </td>
                    <tr>
                        <td>
                            <label>
                                Email: 
                            </label>
                        </td>
                        <td colspan="2">
                            <span> <?php echo $_POST["email"]; ?><br> </span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Telephone No:
                            </label>
                        </td>   
                        <td colspan="2">
                            <span>  <?php echo $_POST["usrtelephone"]; ?><br> </span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Age:
                            </label>
                        </td> 
                        <td colspan="2">
                            <span> <?php
                                    $d = date("Y");
                                    $date = strtotime($_POST['dob']);
                                    $mydate = date("Y", $date);
                                    $age = $d - $mydate;
                                    echo $age;
                                    ?><br> </span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Gender:
                            </label>
                        </td>  
                        <td colspan="2">
                            <span>  <?php echo $_POST["gender"]; ?><br> </span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Marital Status:
                            </label>
                        </td>   
                        <td colspan="2">
                            <span>  <?php echo $_POST["chioce"]; ?><br> </span>
                        </td>  
                    </tr>                    
                    <tr>
                        <td>
                            <label>
                                Religion:
                            </label>
                        </td>  
                        <td colspan="2">
                            <span> <?php echo $_POST["religion"]; ?><br>  </span>
                        </td>  
                    <tr>
                        <td>
                            <label>
                                Nationality:
                            </label>                         
                        </td>  
                        <td colspan="2">
                            <span>  <?php echo $_POST["national"]; ?><br> </span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Language:
                            </label> 
                        </td>
                        <td colspan="2">
                            <span>   <?php
                                foreach ($_POST["lang"] as $key => $value) {
                                    echo $value . " ";
                                };
                                    ?><br> </span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Hobbies:
                            </label>    
                        </td>   
                        <td colspan="2">
                            <span>  <?php
                                foreach ($_POST["hobby"] as $key => $value) {
                                    echo $value . " ";
                                };
                                    ?><br> </span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                State of Origin:
                            </label>
                        </td>
                        <td colspan="2">
                            <span>  <?php echo $_POST["state"]; ?><br> </span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Postal Address:
                            </label>
                        </td>   
                        <td colspan="2">
                            <span>   <?php echo $_POST["address"]; ?><br> </span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Qualification:
                            </label>
                        </td>     
                        <td colspan="2">
                            <span>  <?php echo $_POST["qual"]; ?><br> </span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Institution Attend:
                            </label>
                        </td>     
                        <td colspan="2">
                            <span>  <?php echo $_POST["instute"]; ?><br> </span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label class="abtu">
                                About Employee:
                            </label>  
                        </td>
                        <td colspan="2">
                            <span> <?php echo $_POST["about"]; ?><br> </span>
                        </td>  
                    </tr>

                </table> 
                <!--                Name:   
                                Email:  <//?php echo $_POST["email"]; ?><br>
                                Telephone No:    <//?php echo $_POST["usrtelephone"]; ?><br>
                                Date_Of_Birth:    <//?php echo $_POST["dob"]; ?><br>
                                Gender:   <//?php echo $_POST["gender"]; ?><br>
                                Marital Status:    <//?php echo $_POST["chioce"]; ?><br>
                                Religion:    <//?php echo $_POST["religion"]; ?><br>
                                Nationality:    <//?php echo $_POST["national"]; ?><br>
                                Language:    <//?php
                                                foreach ($_POST["lang"] as $key => $value) {
                                                    echo $value . " ";
                                                };
                ?><br>
                                Hobbies:    <//?php
                                foreach ($_POST["hobby"] as $key => $value) {
                                    echo $value . " ";
                                };
                ?><br>
                                State of Origin:    <//?php echo $_POST["state"]; ?><br>
                                Postal Address:    <//?php echo $_POST["address"]; ?><br>
                                Qualification:    <//?php echo $_POST["qual"]; ?><br>
                                Institution Attend:    <//?php echo $_POST["instute"]; ?><br>
                                About Employee:    <//?php echo $_POST["about"]; ?><br>-->

                <?php
//$d=strtotime("dob");
//echo "Created date is " . date("Y", $d);
                ?>

            </div>
        </form>
    </body>
</html>
