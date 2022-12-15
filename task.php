

<?php
$no1 = $no2 ="";
$no1error = $no2error ="";
$mul="";


if (isset($_GET["no1"]) && isset($_GET["no1"]))
{

	$no1=$_GET["no1"];
	$no2=$_GET["no2"];
	
	$error = errors($no1,$no2);
	if($error == ""){
		$no1=$_GET['no1'];
        $no2=$_GET['no2'];

        $mul=($no1*$no2)/"100";
		
	}else{
		echo $error;
		echo "<br>";
	}
	
	

}

	 function errors($no1,$no2) 
	 {
		 $errosMsg ="";
		
if (!$_GET["no1"])
{
$errosMsg= "please fill number in the  value";
}
else if  (!$_GET["no2"])
{
$errosMsg= " please fill number in the  value ";
}


else if(!is_numeric($_GET["no1"])) 
{
	$errosMsg= "numbers only , please";

}
else if(!is_numeric($_GET["no2"])) 
{
	$errosMsg= "numbers only , please";

}
else
{
	$errosMsg ="";
}
	
return $errosMsg;
	 }
	 
	 






   


?>
Result:<input type="text" value="<?php echo $mul; ?>">
