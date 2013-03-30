<?php 



function dbconnect()
{
	
	 
	$connect=mysqli_connect('localhost','root','','pizzabox');
	 
	return $connect;
}
	


function get_list_pizza($prixmax)
{	
	$con = dbconnect();
	
	$sql_req= "select * from pizza where TarifPizz < '$prixmax' ";
	
    $req=mysqli_query($con,$sql_req);  
	
	 
	$tabpizza=array();
	
	while($pizzaligne = mysqli_fetch_object($req))
					{
 					$tabpizza[]=$pizzaligne;	
					}

	mysqli_close($con);
  
     
    return   $tabpizza; 

    
	
	
}
?>