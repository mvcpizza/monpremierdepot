<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>Documentcxvxcvcxvcxv sans titre</title>
<link href="pizza.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form name='recherchepizza' action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="post">
<input type="text" name='prix_max' value=" donner le prix max" />
<input type="submit" />
</form>



	
 

 
<?php
foreach($tabpizza2 as $pizza )
{
?>
  <div class='itempizza'> 
<?php
 echo($pizza->DesignPizz); 
 echo("     ");	
 echo($pizza->TarifPizz);
 echo("     ");
 echo($pizza->NroPizz);
 echo("     ");
 echo("</br>");
  ?> 
  
 </div > 
<?php
echo("</br>");
}

?>
 

</body>
</html>