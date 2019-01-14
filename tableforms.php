<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            testing optimal
        </title>
        <link href="http://localhost/search_engine_optimizer/css/css.css" type="text/css" rel="stylesheet"/>
        <style>
            table,tr,td{
                border: solid 1px #000;
            } 
            table{
                background-color: #aaa;
            }
            tr{
                background-color: #fff;
            }
            td{
                padding: 10px;   
            }
        </style>

    </head>
    <body>
        <div class="container">
            <table style="width: 100% ">
                <thead>
                    <tr>
                        <th>FOOTBALL <SELECT> <OPTION> </OPTION></SELECT></th>
                        <th>TENNIS</th>
                        <th>BIKE</th>
                        <th>BOXING</th>
                    </tr>
                </thead>  
                <tfoot>
                    <tr>
                        <th>EUROPE</th>
                        <th>WORLD</th>
                        <th>USA</th>
                        <th>AFRICA</th>
                    </tr>
                </tfoot>  
                <tbody>
                    <tr>
                        <td>
                            EPL
                        </td>
                        <td>
                            MURRAY
                        </td>
                        <td>
                            RESOBEGRY
                        </td>
                        <td>
                            BASALI
                        </td>
                    </tr>   
                    <tr>
                        <td colspan="2">
                            LIGA BBVA
                        </td>
                        <td colspan="2">
                            col22
                        </td>
                    </tr>   
                    <tr>
                        <td colspan="3">
                            SERIA A
                        </td>
                        <td>
                            col32
                        </td>
                    </tr>   
                    <tr>
                        <td colspan="2">
                            BUNDESLIGA
                        </td>
                        <td>
                            col42
                        </td>
                        <td >
                            col43
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            FRENCH LIGA
                        </td>
                        <td colspan="3">
                            col52
                        </td>
                    </tr>   
                </tbody>
            </table>  
        </div>
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

    </body>
</html>
