<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            testing optimal
        </title>
        <link href="http://localhost/search_engine_optimizer/css/tableform.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container">
            <h1 align="center">Student Registration Form</h1>

            <form method="get" action="">
                <table>
                    <tr>
                        <td>
                            <label>
                                Surname:
                            </label>  
                        </td>
                        <td colspan="2">
                            <input type="text" name="surname" placeholder="your Surname here"/>  
                        </td>
                        <td rowspan="4">
                            <div class="imagediv">
                                <div class="image">
                                </div>
                                <!--                            <div class="filediv">-->
                                <input type="file" name="pic" class="inputfile" value="pix"/>
                                <!--</div>-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Other names:
                            </label>  
                        </td>
                        <td colspan="2">
                            <input type="text" name="othernames" placeholder="your names here"/>  
                        </td>  
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
                            <label> <input type="radio" name="gender" value="male" class="radioinput"/> male  </label>
                        </td>  
                        <td>
                            <label> <input type="radio" name="gender" value="female" class="radioinput"/> female  </label>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                State of Origin:
                            </label>  
                        </td>
                        <td colspan="2">
                            <select name="stateoforigin">
                                <option value="lagos">Lagos</option>   
                                <option value="ogun">Ogun</option>   
                                <option value="osun">Osun</option>   
                                <option value="oyo">Oyo</option>   
                                <option value="ondo">Ondo</option>   
                            </select>
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Previous Class:
                            </label>  
                        </td>
                        <td colspan="2">
                            <select name="pre_class">
                                <option value="js1">Jss 1</option>   
                                <option value="js2">Jss 2</option>   
                                <option value="js3">Jss 3</option>   
                                <option value="ss1">SSS 1</option>   
                                <option value="ss2">SSS 2</option>   
                                <option value="ss3">SSS 3</option>   
                            </select>
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Parent Name:
                            </label>  
                        </td>
                        <td colspan="2">
                            <input type="text" name="parent" placeholder="Parent name here"/>  
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label>
                                Hobbies:
                            </label>    
                        </td>
                        <td colspan="3">
                            <label>    <input type="checkbox" name="hobby" class="checkboxinput" value="swimming"/> swimming </label>
                            <label>    <input type="checkbox" name="hobby" class="checkboxinput" value="reading"/> reading </label>
                            <label><input type="checkbox" name="hobby" class="checkboxinput" value="traveling"/> traveling </label>
                            <label>    <input type="checkbox" name="hobby" class="checkboxinput" value="football"/> football </label>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <label class="abtu">
                                About Student:
                            </label>  
                        </td>
                        <td colspan="2">
                            <textarea maxlength="500" rows="10" placeholder="About you" name="about"></textarea>
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

                </table>  
            </form>
        </div>


















        <!--
                <div class="container">
                    <form method="get" action="">
                        <label>sample</label>
                        <input type="text" placeholder="name" maxlength="3" required/> 
                        <input type="number"  max="100" min="0" value="0"/> 
                        <input type="email" /> 
        
                        <input type="checkbox" name="hobby" value="1" checked/> 
                        <input type="checkbox" name="hobby" value="2"/>  
                        <input type="date" /> 
                        <input type="datetime" /> 
                        <input type="range" max="100" min="0"/> 
                        <input type="radio" name="gender" value="male" checked/> 
                        <input type="radio" name="gender" value="female"/> 
        
                        <input type="search" /> 
        
                        <select>
                            <option value="0">zero</option>
                            <option value="1">one</option>
                            <option value="2" selected="">two</option>
                            <option value="3">three</option>
                            <option value="4">four</option>
                        </select>
                        <textarea cols="20" rows="5" maxlength="100" placeholder="go" style="resize: none"></textarea>
        
                        <button type="button">Button</button>
                        <button type="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </form>
                </div>-->

    </body>
</html>

