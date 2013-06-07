<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>page 2</title>
<link rel="stylesheet" type="text/css" href="totocss/bootstrap.css"> 
<link rel="stylesheet"type="text/css" href="totocss/style3.css">
</head>

<body>


<?php


 if (isset($_POST['toto']) )
 {
  if(empty($_POST['login'])  && empty($_POST['mdp'] ))
  
  {
  echo"error";  
	  
   }  
   
   else
    {
		
	header ("location: page.php");	
		
	   }
	
	 
	 
	 }
	 
 

?>

<div id="trois">

<form name="formulaire" method="post"  action="index.php">

  <table>
  	<tr>
    	<td>login:</td>
        <td><input placeholder="login" name="login"  type="text" required></td>
    </tr>
    
 	<tr>
    	<td>password:</td>
        <td><input placeholder="mot de passe" name="mdp" type="password" required></td>
    </tr>
    
	<tr>
 
  <td> </td>
  
  <td class="text-right">  <input  class="btn btn-primary" size="20" name="toto" type="submit"  value="connexion"></td>     

   </tr>
  

  
 
</table>

</form>
<p class="text-right"><a href="mailto:test@free.fr">contact</a></p>
</div>


</body>
</html>
 <div id="bip"> Copyright 2013, Tous droits réservés..
  </div>
