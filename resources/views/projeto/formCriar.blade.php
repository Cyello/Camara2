@extends('layout.principal')

@section('conteudo')

	
		<form role="form" action="{!! route('group.store') !!}" method="post" name="criarForm">

		  <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>

		  <div class="form-group">
		    <label for="id_nome">Nome</label>
		    <input type="text" class="form-control" id="id_nome" name="nome" placeholder="Nome do vereador" ng-model="nome" ng-required="true">
		  </div>

		  <div ng-show="criarForm.nome.$invalid && criarForm.nome.$dirty" class="alert alert-danger">
			  <strong>Aviso!</strong> Por favor, preencha o campo nome
		  </div>

		  <div class="form-group">
		    <label for="id_idade">Data de Nascimento</label>
		    <input type="date" class="form-control" id="id_idade" name="data" placeholder="Digite sua data de nascimento" ng-model="data" ng-required="true">
		  </div>

		  <div ng-show="criarForm.data.$invalid && criarForm.data.$dirty" class="alert alert-danger">
			  <strong>Aviso!</strong> Por favor, preencha o campo data de nascimento
		  </div>

		  <div class="form-group">
		    <label for="id_filiacao">Filiação</label>
		    <input type="text" class="form-control" id="id_filiacao" name="filiacao" placeholder="Filiação partidaria" ng-model="filiacao" ng-required="true">
		  </div>

		  <div ng-show="criarForm.filicao.$invalid && criarForm.filicao.$dirty" class="alert alert-danger">
			  <strong>Aviso!</strong> Por favor, preencha o campo filição
		  </div>

		  <div class="form-group">
		    <label for="id_mandato">Mandatos</label>
		    <input type="text" class="form-control" id="id_mandato" name="mandatos" placeholder="Mandatos" ng-model="mandato" ng-required="true"> 
		  </div>

		   <div ng-show="criarForm.mandatos.$invalid && criarForm.mandatos.$dirty" class="alert alert-danger">
			  <strong>Aviso!</strong> Por favor, preencha o campo mandatos
		  </div>

		   <div class="form-group">
		    <label for="exampleInputFile">Foto</label>
		    <input type="file" id="exampleInputFile">
		    
		  </div>

		  <input class="btn btn-default" type="submit" value="enviar" ng-disabled="criarForm.$invalid">

			
		 </form>


@stop