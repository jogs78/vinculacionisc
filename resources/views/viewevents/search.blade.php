{!! Form::open(array('url'=>'review','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<input type="input" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="input" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

{!!Form::close()!!}




