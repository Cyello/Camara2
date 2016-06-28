@extends('layout.principal')

@section('conteudo')

	<table class="table table-striped table-hover"> 
		<thead>
			<tr>
				<th>Id</th>
				<th>Vereador</th>
				<th>Filiação</th>
			</tr>
		</thead>
		
	 	<tbody>
			@foreach ($vereadores as $v)
			<tr>
				<td>{{$v->id}}</td>
				<td>{{$v->nome}}</td>
				<td>{{$v->filiacao}}</td>
				<!--Link para as descriçoes de cada vereador-->
				<td>
					<a href="{!! route('group.show', $v->id) !!}">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</a>
				</td> 
				<td>
					<a href="{!! route('group.edit', $v->id) !!}">
						<span class="glyphicon glyphicon-pencil"></span>
					</a>
				</td> <!-- Link para editar um um vereador -->
				<td>
					<a href="{!! route('group.destroy', $v->id) !!}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td> <!-- Link para remover um vereador-->


			</tr>

			@endforeach
		</tbody>
	</table>

	<a class="btn btn-default" href="{!!route('group.create')!!}">
		<span class="glyphicon glyphicon-plus"></span> 
		vereador
	</a>  <!--Link para adicionar novo vereador-->

	

@stop