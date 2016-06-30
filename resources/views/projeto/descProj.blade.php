@extends('layout.principal')

@section('conteudo')

	@foreach ($desc as $d)
		<h2>{{$d->nome}}</h2>
		<p>
			<h3>Descrição</h3>
			{{$d->des}}
		</p>
		
		
	@endforeach

	<hr>



	@foreach ($desc2 as $d2)
		Votos Sim {{$d2->qt}}
	@endforeach
	<br>

	Vereadores:
	@foreach ($vsim as $s)
		{{$s->nome}}:
		{{$s->ses}}, 
		{{$s->data}}
		<br>
	@endforeach
	<hr>

	@foreach ($desc3 as $d3)
		Votos Não {{$d3->qt}}
	@endforeach

	<br>

	Vereadores:
	@foreach ($vnao as $n)
		{{$n->nome}}:
		{{$n->ses}},
		{{$n->data}}
		<br>
	@endforeach
	<hr>


	@foreach ($desc4 as $d4)
		Abstinencia {{$d4->qt}}
	@endforeach

	<br>

	Vereadores:
	@foreach ($vabs as $a)
		{{$a->nome}}:
		{{$a->ses}},
		{{$a->data}}
		<br>
	@endforeach
	<br>




	Total de votos: {{$d->qt}}

	<br>
	<br>





@stop