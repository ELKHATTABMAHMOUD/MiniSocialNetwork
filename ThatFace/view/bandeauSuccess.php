<!--     <nav class="navbar navbar-inverse" id="bandeau">
        <div class="container-fluid">

            

        </div>
    </nav>
	-->
<div class="panel-footer" >
	<div class="input-group row" style="margin-left: 87%;">
		<div class="input-group-btn">
			<button class="btn btn-primary btn-sm" id="home">Home</button>
		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1">
		</div>
		<div class="input-group-btn ">
			<button class="btn btn-primary btn-sm" id="logout" >Log Out</button>
		</div>
		
		
		
	</div>
	
		

</div>

<script type="text/javascript">

	/*En cas de redirection vers la page d'accueil */
	$('#home').on('click',function(){
		location.replace("ThatFace.php");
		
	});
	/* En cas de connexion */
	$('#logout').on('click',function(){
		location.replace("ThatFace.php?action=logout");
	});
	
	
</script>