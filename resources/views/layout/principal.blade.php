<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
	<link rel="stylesheet" href="/css/custom.css">
	<title>Controle de estoque</title>
</head>
<body>
	<div class="container"> 
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="/produtos" class="navbar-brand">
						Estoque Laravel
					</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="{{ action( 'ProdutoController@listProducts' ) }}">
							Listagem
						</a>
					</li>
					<li>
						<a href="{{ action( 'ProdutoController@create' ) }}">
							Novo
						</a>
					</li>
				</ul>
			</div>
		</nav>

		@yield( 'conteudo' )

		<footer class="footer">
			<p>Delvair</p>
		</footer>
	</div>
</body>
</html>