<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"  charset="utf-8" />
<title>Untitled Document</title>
</head>


<body>
 

<?php 


require('model.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
		//echo("  envoi par formulaire".$_POST['prix_max']."</br>");
	 
        $tabpizza2 = get_list_pizza($_POST['prix_max']);
		

}


else {
 
		//echo("  envoi automatique"."</br>");
		 	 
        $tabpizza2 = get_list_pizza(1000);


}
           
 
require ('view.php');
?>
</body>
</html>
</body>
</html>