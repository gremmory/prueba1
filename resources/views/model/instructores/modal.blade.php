<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$an->id_instructor}}">
	{{Form::open (array('action'=>array('InstructoresController@destroy', $an->id_instructor), 'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">X</span>
				</button>
				<h4 class="modal-title">Eliminar</h4>
			</div>
			<div class="modal-body">
				<p>Confirmar para Eliminar...</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				{{ Form::submit('Confirmar', array('class' => 'btn btn-warning')) }}
			</div>
		</div>
	</div>
	{{Form::close()}}
</div>