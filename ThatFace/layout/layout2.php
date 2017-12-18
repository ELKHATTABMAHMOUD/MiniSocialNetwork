<?php
/**
 * EL KHATTAB, Harkiolakis
 * Layout qui organise l'architecture graphique du site
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ThatFace</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<?php
	if(isset($_SESSION['user']) ){
		$user = $_SESSION['user'] ; 
?>
	<?php  include("ThatFace/view/bandeauSuccess.php"); ?>
	<div class="contenu">
		<div class="row">
			<div class="alert alert-success" id="st_success" style="display:none">
				>
			</div>
			<div class="alert alert-danger" id="st_error" style="display:none">
				
			</div>
			<div class="col-xs-11 col-sm-11 col-md-12 col-lg-12 row">
				<?php  include("ThatFace/view/profil.php"); ?>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-7 col-lg-7">
				<?php  include("ThatFace/view/wall.php"); ?>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 ">
				
				<?php  include("ThatFace/view/friends.php"); ?>
				
				<div  id="draggable" >
					<?php include("ThatFace/view/chat.php");?> 
				</div>
			</div> 
			
		</div>
	</div>
	<script src="js/jquery-ui.min.js"></script>
	
	<script src="js/myjs/addchat.js"  > </script>
	<script src="js/myjs/updatestatut.js"  > </script>
	<!-- update
	<script>
		$(document).ready( function(){
		
			$('#st_success').fadeIn(3000);
			setTimeout(function(){ $('#st_success').fadeOut(4000); }, 3000);
			
			$('#st_error').fadeIn(3000);
			setTimeout(function(){ $('#st_error').fadeOut(4000); }, 3000);
		});
	</script>
	-->
	
<?php 
   }
   else{
	   include "layout.php";
   }
   
?>

</body>
</html>
