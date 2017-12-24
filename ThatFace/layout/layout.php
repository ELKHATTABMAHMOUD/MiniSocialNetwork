<?php
/**
 * EL KHATTAB, Harkiolakis
 * Layout qui organise l'architecture graphique du site
 */
?>

<?php
	if(isset($_SESSION['user']) ){
		$user = $_SESSION['user'] ; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ThatFace</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/chatcss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
	<?php  include("ThatFace/view/bandeauSuccess.php"); ?>
	<div class="contenu">
		<div class="row">
			<div class="alert alert-success" id="st_success" style="display:none">
			
			</div>
			<div class="alert alert-danger" id="st_error" style="display:none">
				
			</div>
			<div class=" col-sm-4 col-md-3 col-lg-3 hidden-xs">
				<?php   include("ThatFace/view/profil.php"); ?>
				<div >
				<?php  include("ThatFace/view/friends.php");?>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
				<?php  include("ThatFace/view/wall.php"); ?>
			</div> 
			<div class="col-md-3 col-lg-3 hidden-xs hidden-sm chatbox ">
				<div  id="draggable" >
					<?php include("ThatFace/view/chat.php");?> 
				</div>
			</div> 
			
		</div>
	</div>
<!--   partie chat -->
	<script src="js/jquery-ui.min.js"></script>
	
	<script src="js/myjs/addchat.js"  > </script>
	<script src="js/myjs/updatestatut.js"  > </script>
	<script src="js/myjs/chatbox.js"  > </script>
</body>
</html>

<?php 
   }
   else{
	   include "layout_login.php";
   }
   
?>
