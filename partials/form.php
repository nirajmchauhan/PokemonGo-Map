<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="" method="POST">
				<h1 class="text-center">Pokedex</h1>
				<div class="input-group">
					<input type="text" name="location" class="form-control" id="location" readonly placeholder="Detect Location" /> 
					<span class="input-group-btn">
						<button type="button" class="btn btn-primary" onclick="initGeolocation()" id="detect">		<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						</button>
						<button id="submit" class="btn btn-primary hidden" type="submit">Get Pokemons!</button>
					</span>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	function initGeolocation()
	{
		if( navigator.geolocation )
		{
			navigator.geolocation.getCurrentPosition( success, fail );
		}
	}

	function success(position)
	{
		console.log(position.coords);
		$('#location').val(position.coords.latitude + ', ' + position.coords.longitude);
		$('#detect, #submit').toggleClass('hidden');
	}

	function fail()
	{
	}


</script>