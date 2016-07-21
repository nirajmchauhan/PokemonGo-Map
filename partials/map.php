<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="" method="POST">
				<div class="btn-group btn-group-justified" role="group" aria-label="...">
					<div class="btn-group" role="group">
						<input type="submit" class="btn btn-lg btn-block btn-danger" name="stop" value="Stop Search" />
					</div>
					<div class="btn-group" role="group">
						<button type="button" id="reload" class="btn btn-lg btn-block btn-primary">
							Reload Map 
							<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
						</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>

<iframe id="map" src="http://0.0.0.0:5000/"></iframe>

<script>
	$('#reload').on('click', function(){
		$( 'iframe' ).attr( 'src', function ( i, val ) { return val; });
	});
</script>