@extends('layout.principal')

@section('conteudo')
	
	<form role="form" action="{!! route('group.update', $v->id) !!}" method="post" name="editForm">

	  <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>

	  <div class="form-group">
	    <label for="id_nome">Nome</label>
	    <input type="text" class="form-control" id="id_nome" name="nome" value="{{$v->nome}}" placeholder="Nome do vereador">
	  </div>

	  <div class="form-group">
	    <label for="id_data">Data de nascimento</label>
	    <input type="date" class="form-control" id="id_data" name="data" value="{{$v->data}}" placeholder="Digite sua data de nascimento">
	  </div>

	  <div class="form-group">
	    <label for="id_filicao">Filiação</label>
	    <input type="text" class="form-control" id="id_filiacao" name="filiacao" value="{{$v->filiacao}}" placeholder="Digite sua filiação">
	  </div>

	  <div class="form-group">
	    <label for="id_mandato">Mandatos</label>
	    <input type="text" class="form-control" id="id_mandato" name="mandatos" value="{{$v->mandatos}}" placeholder="Mandatos">
	  </div>

	  <input class="btn btn-defaut" type="submit" value="Salvar">
		
	 </form>

@stop