<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Pedido</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1>Detalhes do Pedido</h1>
    <p><strong>ID do Pedido:</strong> {{ $pedido->id }}</p>
    <p><strong>Nome do Cliente:</strong> {{ $pedido->cliente }}</p>
    <p><strong>Produto:</strong> {{ $pedido->produto->nome }}</p>
    <p><strong>Quantidade:</strong> {{ $pedido->quantidade }}</p>
    <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Voltar</a>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
