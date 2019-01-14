<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            EMPLOYEE FORM
        </title>
        <link href="http://localhost/search_engine_optimizer/css/Employee.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container">
            <h1 class="h1" name="header">Nigeria Gas & Steel Registration Form</h1>
            <table>
                <tr>
                    <td rowspan="20" class="vlign">
                        <div class="imagediv">
                            <div class="image">
                                 <?php                        
                            $pixurl = "image/" . date("ymdhis") . ".png";
                            if (isset($_POST["upload"])) {
                                if ($_FILES['pic']['size'] < (1024 * 1024) && strpos($_FILES['pic']['type'], "image") > -1) {
                                    move_uploaded_file($_FILES["pic"]["tmp_name"], $pixurl);
                                } else {
                                    echo "<script>alert('invalid file or file too large')</script>";
                                }
                            }
                            //print_r($_FILES)
                            ?>          
                                <img class="imgsrc" src="<?php echo $pixurl; ?>"/>
                            </div>
                            <form method="post" enctype="multipart/form-data" action="" > 
                                <input type="file" name="pic" class="inputfile" value="pix"/>
                                <button type="submit" name="upload" class="upbtn">Upload</button>
                            </form>                                                    
                        </div>
                    </td>
                <form method="post" action="Empoutput.php">
                    <td>
                        <label class="sur">
                            Surname: 
                        </label>
                    </td>
                    <td colspan="2">
                        <input type="text" name="Surname" placeholder="enter your Surname here" required/>    
                    </td>

                    </tr>
                    <tr>
                        <td>
                            <label>
                                Other names:
                            </label>
                        </td>
                        <td colspan="2">
                            <input type="text" name="othernames" placeholder="enter your Othernames here"/>    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Email:
                            </label>
                        </td>
                        <td colspan="2">
                            <input type="email" name="email" placeholder="enter your email here"/>    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Telephone No:
                            </label>
                        </td>
                        <td colspan="2">
                            <input type="tel" name="usrtelephone" placeholder="enter your telephone here"/>    
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Date of Birth:
                            </label>
                        </td>
                        <td colspan="2">
                            <input type="date" name="dob" placeholder="your date of birth here"/>    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Gender:
                            </label>
                        </td>
                        <td>
                            <label> <input type="radio" name="gender" value="male" class="radioinput"/> Male </label>    
                        </td>
                        <td>
                            <label>   <input type="radio" name="gender" value="female" class="radioinput"/> Female </label>   
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Marital Status:
                            </label>
                        </td>
                        <td>
                            <label> <input type="radio" name="chioce" value="single" class="radioinput"/> Single </label>   
                        </td>
                        <td>
                            <label> <input type="radio" name="chioce" value="Married" class="radioinput"/> Married </label>   
                        </td><td>
                            <label> <input type="radio" name="chioce" value="divorce" class="radioinput"/> Divorce </label>   
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Religion:
                            </label>
                        </td>
                        <td colspan="2">
                            <select name="religion">
                                <option value="islam" >Islam</option>
                                <option value="crist" >c</option>
                            </select>   
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Nationality:
                            </label>
                        </td>
                        <td colspan="2">
                            <select name="national">
                                <option value="Nigerian" >Nigerian</option>
                                <option value="Non_Nigerian" >Non_Nigerian</option>
                            </select>   
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Language:
                            </label>
                        <td colspan="3">
                            <label><input type="checkbox" name="lang[]" class="checkboxinput" value="English"/> English </label>
                            <label><input type="checkbox" name="lang[]" class="checkboxinput" value="Yoruba"/> Yoruba </label>
                            <label><input type="checkbox" name="lang[]" class="checkboxinput" value="Hausa"/> Hausa </label>
                            <label><input type="checkbox" name="lang[]" class="checkboxinput" value="Igbo"/> Igbo </label>
                            <label><input type="checkbox" name="lang[]" class="checkboxinput" value="French"/> French </label>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Hobbies:
                            </label>    
                        </td>
                        <td colspan="3">
                            <label><input type="checkbox" name="hobby[]" class="checkboxinput" value="SWIMMING"/> swimming </label>
                            <label><input type="checkbox" name="hobby[]" class="checkboxinput" value="READING"/> reading </label>
                            <label><input type="checkbox" name="hobby[]" class="checkboxinput" value="TRAVELLING"/> traveling </label>
                            <label><input type="checkbox" name="hobby[]" class="checkboxinput" value="FOOTBALL"/> football </label>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                State of Origin:
                            </label>
                        </td>
                        <td colspan="2">
                            <select name="state">
                                <option value="None">None</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Osun">Osun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Kano">Kano</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Niger">Niger</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Abia">Abia</option>
                            </select>   
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Postal Address:
                            </label>
                        </td>
                        <td colspan="2">
                            <input type="text" name="address" placeholder="enter your address here"/>    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Qualification:
                            </label>
                        </td>
                        <td colspan="2">
                            <select name="qual">
                                <option value="SSCE">SSCE</option>
                                <option value="DIPLOMA">DIPLOMA</option>
                                <option value="OND">OND</option>
                                <option value="HND">HND</option>
                                <option value="B.SC">BSC</option>
                                <option value="B.TECH">BTECH</option>
                                <option value="MASTERS">MASTERS</option>       
                                <option value="PHD">PHD</option>
                            </select>   
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Institution Attend:
                            </label>
                        </td>
                        <td colspan="2">
                            <select name="instute">
                                <option value="Fountain Group Of School">Fountain Group Of School</option>                         
                                <option value="Moshood Abiola Polytechnic">Moshood Abiola Polytechnic</option>                          
                                <option value="University of Technology Minna">University of Technology Minna</option>
                                <option value="University of Ilorin">University of Ilorin</option>
                            </select>   
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="abtu">
                                About Employee:
                            </label>  
                        </td>
                        <td colspan="2">
                            <textarea maxlength="500" rows="10" placeholder="About yourself" name="about"></textarea>
                        </td>  
                    </tr>
                    <tr>
                        <td colspan="2" class="btn-submit">
                            <button type="submit" value="Submit" name="submit">Submit</button>  
                        </td>
                        <td colspan="2" class="btn-clear">
                            <button type="reset" value="Clear">Clear</button>
                        </td>  
                    </tr>
                    <input type="hidden" name="passme" value="<?php echo $pixurl?>">
            </table>
        </div>
    </form>
</body>
</html>

