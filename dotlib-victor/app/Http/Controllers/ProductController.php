<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Mostra uma lista do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::paginate(20);

        return view('products.index', compact('data'));
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'uni_price_product' => 'required',
            'barcode_product' => 'required|max:20',
            'qnt_product' => 'required',
        ], [
            'max' => 'O numero máximo de caracteres é 20.',
            'required' => 'Este campo é obrigatório.',
        ])->validate();

        Product::create($request->all());

        return redirect()->route('produtos.index')->banner('Produto criado com sucesso.');
    }

    /**
     * Mostra o recurso especificado.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Exibe determinado formulario para edição do dado.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Atualize o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        Validator::make($request->all(), [
            'uni_price_product' => 'required',
            'barcode_product' => 'required|max:20',
            'qnt_product' => 'required',
        ], [
            'max' => 'O numero máximo de caracteres é 20.',
            'required' => 'Este campo é obrigatório.',
        ])->validate();

        $product->update($request->all());

        return redirect()->route('produtos.index')->banner('Produto atualizado com sucesso.');
    }

    /**
     * Remova o recurso especificado do armazenamento.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('produtos.index')->banner('Produto deletado com sucesso.');
    }
}
