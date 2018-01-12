<?php 
//tempConvert.php
//check for input
if (array_key_exists('degree',$_POST)){
    $scale = $_POST['scale'];
	$degree = $_POST['degree'];
    $degree = number_format($degree, 2);
	
	//check that input is not NULL or NaN
	if(is_numeric($_POST['degree']))
		{
		if ($scale == "celcius") 
		{
            print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>$degree</td><td>celsius</td></tr>"; 
            $c_2_f = ($degree*9/5+32); 
            print "<tr><td>$c_2_f</td><td>fahrenheit</td></tr>"; 
            $c_2_k = ($degree+273.15); 
            print "<tr><td>$c_2_k </td><td>kelvin</td></tr>"; 
        } 
		if ($scale == "fahrenheit") 
		{
            print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>$degree</td><td>farhenheit</td></tr>"; 
            $f_2_c = (($degree -32)*5/9); 
            print "<tr><td>$f_2_c</td><td>celsius</td></tr>"; 
            $f_2_k = ($f_2_c+273.15); 
            print "<tr><td>$f_2_k </td><td>kelvin</td></tr>"; 
		}  
        if ($scale == "kelvin") 
		{
            print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>$degree</td><td>kelvin</td></tr>"; 
            $k_2_f = (($degree - 273.15)*9/5+32); 
            print "<tr><td>$k_2_f</td><td>fahrenheit</td></tr>"; 
            $k_2_c = ($degree-273.15); 
            print "<tr><td>$k_2_c </td><td>celsius</td></tr>"; 
		} 
	 }
    else
		//print an error message if incorrect type of input
		echo "<span style = \"color:red\">*Please Enter a Valid Temperature.</span>";
}
?> 
<!DOCTYPE html>
<html>
    <head> 
        <title>Convert Temperature</title> 
    </head>
    
    <body> 
        <h2>Temperature Conversion</h2> 
        <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST"> 
            Degrees: 
            <input type = "text" name = "degree" size=4> 
            <select name="scale"> <option value="celcius">Celsius</option> 
            <option value="fahrenheit">Fahrenheit</option> 
            <option value="kelvin">Kelvin</option></select><br/> 
            <br/><input type = "submit" name = "Convert Temperature"/><br/> <br/>
        </form> 
    </body>
</html>