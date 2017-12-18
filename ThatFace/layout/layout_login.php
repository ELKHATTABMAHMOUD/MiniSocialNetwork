<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ThatFace</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/jquery-ui.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>

</head>
<head>
	<meta charset="utf-8">
	<title>Ton appli !</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>

</head>
<body>

<!-- j'ai le droit de mettre des commentaires dans mon fichier HTML -->

	<div class="wrapper">
		<div class="container">
			
			<h2 id="super" style="margin-top:15px">Super c'est ton appli ! </h2>
			<!-- inclusion de la view de connexion -->
			<?php
				// include($template_view);
			?>
			<form method="post" action="ThatFace.php">
	
	       <label for="pseudo">Votre pseudo :</label>

	       <input type="text" name="pseudo" id="pseudo" />

	       <br />

	       <label for="pass">Votre mot de passe :</label>

	       <input type="password" name="pass" id="pass" />

	       <input type="submit" name="submit" value="se connecter" />
	</form>

		</div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script type="js/index.js"></script>


	<script type="text/javascrpt">
	$(document).ready(function(){
			
		
	/*	$('form.ajax').on('submit',function(){
			var that = $(this);
			url = that.attr('action');
			type = that.attr('method');
			data = {};
			that.find('[name]').each(function(){
				var that = $(this);
				name = that.attr('name');
				value= that.val();
				data[name]= value ;
			});
			$.ajax({
				url : url ,
				type : type,
				data : data,
				success: function(response){
					$(document).load('ThatFace/view/logoutSuccess.php');
					$('form.ajax').remove();
				}
			});
			return false ;
		});*/
	});
	</script>

</body>
</html>
	