<div class="row">
	<div class="col-md-6">
		
		<div class="form-group"> 
			{!! Form::text('nit', null, ['class' => 'form-control floating-label', 'placeholder' => 'NIT:']) !!}
			@if($errors->has('nit'))
				<p class="text-danger">
					{{ $errors->first('nit') }}
				</p>
			@endif
		</div>

		<div class="form-group"> 
			{!! Form::text('nombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nombre:']) !!}
			@if($errors->has('nombre'))
				<p class="text-danger">
					{{ $errors->first('nombre') }}
				</p>
			@endif
		</div>

		<div class="form-group"> 
			{!! Form::select('rol', ['cliente' => 'Cliente', 'proveedor' => 'Proveedor'], null, ['class' => 'form-control floating-label', 'placeholder' => 'Rol:']) !!}
			@if($errors->has('rol'))
				<p class="text-danger">
					{{ $errors->first('rol') }}
				</p>
			@endif
		</div>

		<div class="form-group"> 
			{!! Form::text('direccion', null, ['class' => 'form-control floating-label', 'placeholder' => 'Dirección:']) !!}
			@if($errors->has('direccion'))
				<p class="text-danger">
					{{ $errors->first('direccion') }}
				</p>
			@endif
		</div>

		<div class="form-group"> 
			{!! Form::text('telefono', null, ['class' => 'form-control floating-label', 'placeholder' => 'Teléfono:']) !!}
			@if($errors->has('telefono'))
				<p class="text-danger">
					{{ $errors->first('telefono') }}
				</p>
			@endif
		</div>
	</div>
	<div class="col-md-6">

		<div class="form-group"> 
			{!! Form::email('email', null, ['class' => 'form-control floating-label', 'placeholder' => 'Email:']) !!}
		</div>

		<div class="form-group"> 
			{!! Form::textarea('notas', null, ['class' => 'form-control floating-label', 'rows' => '8', 'placeholder' => 'Notas:']) !!}
		</div>

	</div>
</div>
