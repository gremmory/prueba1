@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-6 col-md-sm-6 col-xs-12">
			<H3>Editar Profesion: {{ $marcas->Desc_Marca}}</H3>

			@if (count ($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif 


            {!! Form::model ($marcas, ['method'=>'PATCH', 'route' => array('marcas.update', $marcas->Id_Marca)]) !!}
            {{ Form::token() }}
            <div class="form-group">
                <label for="Desc_Marca"></label>
                <input type="text" name="Desc_Marca" class="form-control" value="{{$marcas->Desc_Marca}}" placeholder="Marca ..." required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            {!! Form::close() !!}

			
		</div>
	</div>

@endsection

