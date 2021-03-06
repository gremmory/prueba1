@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-6 col-md-sm-6 col-xs-12">
			<H3>Editar Estableciemiento: {{ $establecimientos->ESTABLECIMIENTO}}</H3>

			@if (count ($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif 


            {!! Form::model ($establecimientos, ['method'=>'PATCH', 'route' => array('establecimientos.update', $establecimientos->cod_establecimiento)]) !!}
            {{ Form::token() }}
            <div class="form-group">
                <label for="Cod_establecimiento">Cod. Establecimiento</label>
                <select class="form-control" name="cod_depto" id="cod_depto">
                @if ($establecimientos != null)
                @foreach($establecimientos as $item)
                    <option value="{{$item->cod_establecimiento}}">{{$item->ESTABLECIMIENTO}}</option>
                @endforeach
                @endif
                </select>
<!--
                <input type="text" name="Cod_establecimiento" class="form-control" value="{{old('Cod_establecimiento')}}" placeholder="Cod. del Establecimiento ... ">
-->                
            </div>

            <div class="form-group">
                <label for="Fecha_Retiro">Fecha de Retiro</label>
                <input type="date" name="Fecha_Retiro" class="form-control" value="{{$establecimientos->Fecha_Retiro}}" placeholder="Y-m-d">
            </div>

            <div class="form-group">
                <label for="tipo_equipo">Tipo de Equipo</label>
                <select class="form-control" name="tipo_equipo" id="tipo_equipo">
                    <option value="{{$establecimientos->tipo_equipo}}">Cod. - {{ $establecimientos->tipo_equipo }}</option>
                @if ($dispositivos != null)
                @foreach($dispositivos as $item)
                    <option value="{{$item->tipo_equipo}}">{{$item->Desc_tipoequipo}}</option>
                @endforeach
                @endif
                </select>      
            </div>
<!--  ***************************************************************** -->
            <div class="form-group">
                <label for="Descrip_Retiro">Descripcion de Retiro</label>
                <input type="text" name="Descrip_Retiro" class="form-control" value="{{$establecimientos->Descrip_Retiro}}" placeholder="Descripcion ... " rows="5" cols="80">
            </div>

            <div class="form-group">
                <label for="No_Serie">No_Serie</label>
                <input type="text" name="DIRECCION" class="form-control" value="{{$establecimientos->DIRECCION}}" placeholder="No_Serie ... ">
            </div>

            <div class="form-group">
                <label for="TELEFONO">Telefono</label>
                <input type="text" name="TELEFONO" class="form-control" value="{{$establecimientos->TELEFONO}}">
            </div>
            <div class="form-group">
                <label for="NomRetiro">Nombre Retiro</label>
                <input type="text" name="NomRetiro" class="form-control" value="{{$establecimientos->NomRetiro}}" placeholder="NomRetiro ... ">
            </div>
            <div class="form-group">
                <label for="Nomentrega">Nombre entrega</label>
                <input type="text" name="Nomentrega" class="form-control" value="{{$establecimientos->Nomentrega}}" placeholder="Nomentrega ... ">
            </div>
            <div class="form-group">
                <label for="JORNADA">Jornada</label>
                <input type="text" name="JORNADA" class="form-control" value="{{$establecimientos->JORNADA}}" placeholder="Jornada ... ">
            </div>

            <div class="form-group">
                <label for="Fecha_Entrega">Fecha de Entrega</label>
                <input type="date" name="Fecha_Entrega" class="form-control" value="{{$establecimientos->Fecha_Entrega}}" placeholder="Y-m-d">
            </div>



            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            {!! Form::close() !!}

			
		</div>
	</div>

@endsection

