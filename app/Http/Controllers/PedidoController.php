<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Produto; // Caso você precise de produtos para associar ao pedido
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function create()
    {
        $produtos = Produto::all(); // Carregar todos os produtos
        return view('pedidos.create', compact('produtos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required|string|max:255',
            'produto_id' => 'required|exists:produtos,id', // Verifica se o produto existe
            'quantidade' => 'required|integer|min:1',
            'data' => 'required|date',
        ]);

        Pedido::create([
            'cliente' => $request->input('cliente'),
            'produto_id' => $request->input('produto_id'),
            'quantidade' => $request->input('quantidade'),
            'data' => $request->input('data'),
        ]);

        return redirect('/pedidos/novo')->with('success', 'Pedido salvo com sucesso!');
    }

    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.show', ['pedido' => $pedido]);
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        $produtos = Produto::all(); // Carregar todos os produtos para edição
        return view('pedidos.edit', compact('pedido', 'produtos'));
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->update([
            'cliente' => $request->cliente,
            'produto_id' => $request->produto_id,
            'quantidade' => $request->quantidade,
            'data' => $request->data,
        ]);

        return redirect('/pedidos/' . $id)->with('success', 'Pedido atualizado com sucesso!');
    }

    public function delete($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.delete', ['pedido' => $pedido]);
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return redirect('/pedidos')->with('success', 'Pedido excluído com sucesso!');
    }
}
