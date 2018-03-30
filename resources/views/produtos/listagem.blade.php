@extends( 'layout.principal' )
@section( 'conteudo' )
	
	@if( empty($produtos) )
		<div class="alert alert-danger">
			Você não tem nenhum produto cadastrado!
		</div>
	@else
		<h1>Listagem de Produtos</h1>
		<table class="table table-striped table-bordered table-hover">
			@foreach ($produtos as $p)
			<tr class=" {{ $p->quantidade<=1 ? 'danger' : '' }} ">
				<td>{{ $p->nome }}</td>
				<td>{{ $p->valor }}</td>
				<td>{{ $p->descricao }}</td>
				<td>{{ $p->quantidade }}</td>
				<td><a href="{{ action( 'ProdutoController@show', $p->id ) }}"><button class="btn btn-secondary">Search</button></a></td>
				<td><a href="{{ action( 'ProdutoController@destroy', $p->id ) }}"><button class="btn btn-danger">Remove</button></a></td>
			</tr>
			@endforeach
		</table>
	@endif
	@if( $p->quantidade<=1)
	<h4>
		<span class="label label-danger pull-right">
			Um ou menos produtos no estoque!
		</span>
	</h4>
	@endif
	@if( old( 'nome' ) )
	<div class="alert alert-success">
    	<strong>Sucesso!</strong> O produto:{{ old( 'nome' ) }} foi adicionado com sucesso!
	</div>
	@endif
@stop