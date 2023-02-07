<?php

include "db.php";

if(isset($_POST['convert']))
{
    $enterval = $_POST['enterval'];
    $entertype = $_POST['entertype'];
    $restype = $_POST['restype'];
   
   

    if ($entertype == "farenheit")
    {

        if($restype == "Degree" )
        {
            $res = ($enterval - 32) *  5/9;
            $fres = round($res,2);
        }
        else
        {
            $res = ($enterval - 32)*5/9 + 273.15;
            $fres = round($res,2);
        }
       
     
    }
    elseif ($entertype == 'Degree')
    {
        if($restype == "farenheit")
        {
            $res =  $enterval*(9/5)+32;
            $fres = round($res,2);
        }
        else
        {
            $res =  $enterval+ 273.15;
            $fres = round($res,2);
        
        }

    }
    elseif ($entertype == "Kelvin")
    {
        if($restype == "farenheit")
        {
            $res =  ($enterval - 273.15)* 9/5 + 32;;
            $fres = round($res,2);
            
        }
        else
        {
            $res =  $enterval - 273.15;
            $fres = round($res,2);
            
        }
        
    }
    else{

        echo "<script type='text/javascript'>alert('Please enter the values');</script>";

    }


    
}


?>






































    <html>

    <head>
        <link rel="stylesheet" href="temp.css">
    </head>

    <body class="bdy">
        <h1 class="h">Temprature Converter</h1>
        <form method="post" align="center" class="frm">
            <label>Enter the value:  </label><input type="number" name="enterval"><br><br>




            <lable>Type of enter value: </lable>
            <select id="type" name="entertype">
        <option value="farenheit">Farenheit</option>
        <option value="Degree">Degree</option>
        <option value="Kelvin">Kelvin</option>
        </select>

            <br><br>


            <lable>Type of converted value: </lable>
            <select id="type" name="restype">
        <option value="farenheit">Farenheit</option>
        <option value="Degree">Degree</option>
        <option value="Kelvin">Kelvin</option>
        </select>
            <br><br>



            <label>Converted Value : </label><input type="number" class="res"  name="res" value = "<?php echo (isset($fres))?$fres:'';?>">
            <input type="text" class="type" value="<?php echo (isset($restype))?$restype:'';?>")>
            <br><br>
            <br><br>

            <input type="submit" class="btn" value="Convert" name="convert">

        </form>
    </body>

    </html>