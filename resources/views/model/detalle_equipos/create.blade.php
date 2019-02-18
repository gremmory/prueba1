@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-6 col-md-sm-6 col-xs-12">
			<H3>Nuevo Detalle de Equipo</H3>

			@if (count ($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif 

              


            {!! Form::open(array('url'=> '/model/detalle_equipos/store',  'method'=>'POST', 'autocomplete'=>'off')) !!}
            {{ Form::token() }}

            

            <div class="form-group">
                <label for="cod_establecimiento">Cod Establecimiento</label>
                <!-- <input type="text" name="cod_establecimiento" class="form-control" value="{{old('cod_establecimiento')}}" placeholder="Cod Establecimiento ..."> -->
                {!! Form::text('cod_establecimiento', null, array('placeholder' => 'Buscar Cod. Establecimiento','class' => 'form-control','id'=>'cod_establecimiento', 'required', 'value'=> "{{old('cod_establecimiento')}}" )) !!}
            </div>
            <div class="form-group">
                <label for="cod_equipo">Cod. Equipo</label>
                <input type="text" name="cod_equipo" class="form-control" value="{{old('cod_equipo')}}" placeholder="Cod. del Equipo ... " required>
            </div>
            <div class="form-group">
                <label for="tipo_equipo">Tipo Equipo</label>
                <!-- <input type="text" name="cod_establecimiento" class="form-control" value="{{old('cod_establecimiento')}}" placeholder="Cod Establecimiento ..."> -->
                <select class="form-control" name="tipo_equipo">
                @if ($dispositivos != null)
                @foreach($dispositivos as $item)
                    <option value="{{$item->tipo_equipo}}">{{$item->Desc_tipoequipo}}</option>
                @endforeach
                @endif
                </select>
            </div>
            <div class="form-group">
                <label for="desc_equipo">Descripcion Equipo</label>
                <input type="text" name="desc_equipo" class="form-control" value="{{old('desc_equipo')}}" placeholder="Descripcion equipo ... ">
            </div>
            <div class="form-group">
                <label for="id_marca">Marca</label>
                <select class="form-control" name="id_marca">
                    <option value=""></option>
                @if ($marcas != null)
                @foreach($marcas as $item)
                    <option value="{{$item->Id_Marca}}">{{$item->Desc_Marca}}</option>
                @endforeach
                @endif
                </select>
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" name="series" class="form-control" value="{{old('series')}}" placeholder="Series ... " required>
            </div>
            <div class="form-group">
                <label for="cantidad">cantidad</label>
                <input type="number" name="cantidad" class="form-control" value="{{old('cantidad')}}" placeholder="Cantidad ... ">
            </div>         
            <div class="form-group">
                <label for="Observaciones">Observaciones</label>
                <textarea  type="text" name="Observaciones" class="form-control" value="{{old('Observaciones')}}" placeholder="Observaciones ..." rows="5" cols="80">{{old('Observaciones')}}</textarea>
            </div>    
            <div class="form-group">
                <label for="Fases_Id_Fase">Fase</label>
                <select class="form-control" name="Fases_Id_Fase" required>
                    <option value=""></option>
                @if ($fases != null)
                @foreach($fases as $item)
                    <option value="{{$item->Id_Fase}}">{{$item->Nombre}}</option>
                @endforeach
                @endif
                </select>
            </div>
            <div class="form-group">
                <label for="tipo">cantidad</label>
                <input type="text" name="cantidad" class="form-control" value="{{old('tipo')}}" placeholder="Cantidad ... " required>
            </div>       
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            {!! Form::close() !!}

			
		</div>
	</div>



<!-- AutoComplete Jquery -->
<!--
    <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
    <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
-->
    

@endsection


@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        url = "{{ route('detalle_equipos.ajax') }}";
         $("#cod_establecimiento").typeahead({
            source:  function (query, process) {
                return $.get(url, { query: query }, function (data) {
                    return process(data);
                });

            }
            /*
            source: function(request, response) {
                $.ajax({
                    url: src,
                    dataType: "json",
                    data: {
                        term : request.term
                    },
                    success: function(data) {
                        response(data);
                       
                    }
                });
            },
            minLength: 3,
           */
        });
    });
</script>
@endsection