@extends('plantilla')
@section('titulo')
: notas
@stop

@section('cuerpo')

	<table class="table">
		<thead>
			<tr>
				<th>texto</th>
				<th>fecha</th>
				<th>completado</th>
				<th></th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			@foreach($notas as $item)
			<tr>
				<td>{{ $item->texto }}</td>
				<td>@df($item)</td>
				<td>{{ $item->completado }}</td>
				<td><a href="{{ route('nota.editar', ['id' => $item->idNot]) }}">editar</a></td>
				<td><a href="{{ route('nota.borrar', ['id' => $item->idNot]) }}">borrar</a></td>
			</tr>
			@endforeach
		</tbody>

	</table>

@stop

