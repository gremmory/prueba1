{!! Form::open(array('url'=>'model/usuarios', 'method'=>'GET', 'autocomplete'=>'off', 'role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<input type="text" name="searchText" class="form-control" placeholder="Buscar Nombre o Apellido ..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>


{{Form::close()}}