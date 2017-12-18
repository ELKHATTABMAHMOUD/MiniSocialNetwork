     <nav class="navbar navbar-inverse" id="bandeau">
        <div class="container-fluid">

            <div class="form-group">
				<button class="btn btn-primary btn-sm deconnexion"><a href="ajaxDispatcher.php?action=logout"> deconnexion </a></button>	
            </div>

        </div>
    </nav>

<!--
	<script type="text/javascript">

		$('form.deconnexion').on('submit',function(){
		    var that = $(this);
		    url = that.attr('action');
		    type = that.attr('method');
		    $.ajax({
		      url : url ,
		      type : type,
		      success: function(response){
				alert('mahùmouuuuuuuuuud');
		      }
		    });
		    return false ;
		});
	</script>
-->