

<!-- j'ai le droit de mettre des commentaires dans mon fichier HTML -->

	<div class="wrapper">
		<div class="container">
			
			<h2 id="super" style="margin-top:15px">Super c'est ton appli ! </h2>
			<!-- inclusion de la view de connexion -->
			<?php
				 include($template_view);
			?>

		</div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script type="js/index.js"></script>
	<script type="text/javascript">

		$('form.ajax').on('submit',function(){
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
		});
	</script>
