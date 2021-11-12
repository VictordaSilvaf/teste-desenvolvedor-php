<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    /**
     * Mostra uma lista do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Demand::paginate(20);

        return view('demands.index', compact('data'));
    }

    /**
     * Mostra o formulário para criação de um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demands.create');
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'products_id' => 'required',
            'demands_id' => 'required',
        ]);

        Demand::create($request->all());

        return redirect()->route('demands.index')->banner('success', 'Pedido criado com sucesso.');
    }

    /**
     * Mostra o recurso especificado.
     *
     * @param  \App\Models\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function show(Demand $demand)
    {
        return view('demands.show', compact('demand'));
    }

    /**
     * Exibe determinado formulario para edição do dado.
     *
     * @param  \App\Models\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function edit(Demand $demand)
    {
        return view('demands.edit', compact('demand'));
    }

    /**
     * Atualize o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demand $demand)
    {
        $request->validate([
            'uni_price_product' => 'required',
            'barcode_product' => 'required',
            'qnt_product' => 'required',
        ]);

        $demand->update($request->all());

        return redirect()->route('demands.index')->banner('Pedido atualizado com sucesso.');
    }

    /**
     * Remova o recurso especificado do armazenamento.
     *
     * @param  \App\Models\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demand $demand)
    {
        $demand->delete();

        return redirect()->route('products.index')->banner('success', 'Pedido deletado com sucesso.');
    }
}
