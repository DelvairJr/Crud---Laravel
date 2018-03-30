@extends( 'layout.principal' )
@section( 'conteudo' )

<h1>Novo produto</h1>
<form action="/produtos/update" method="post">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" name="nome">
    </div>
    <div class="form-group">
        <label for="desc">Descrição:</label>
        <input type="text" class="form-control" name="descricao">
    </div>
    <div class="form-group">
        <label for="valor">Valor:</label>
        <input type="text" class="form-control" name="valor">
    </div>
    <div class="form-group">
        <label for="qtdade">Quantidade:</label>
        <input type="number" class="form-control" name="quantidade">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

@stop