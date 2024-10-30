<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo Pedido</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <form action="{{ route('registrar_pedido') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cliente" class="form-label">Nome do Cliente</label>
            <input type="text" name="cliente" class="form-control" id="cliente" placeholder="Digite o nome do cliente">
        </div>
        <div class="mb-3">
            <label for="produto_id" class="form-label">Produto</label>
            <select name="produto_id" class="form-select" id="produto_id">
                <option value="" disabled selected>Selecione um produto</option>
                @foreach($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" name="quantidade" class="form-control" id="quantidade" placeholder="Digite a quantidade">
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data do Pedido</label>
            <input type="date" name="data" class="form-control" id="data">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <!-- Bootstrap JS Bundle -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
