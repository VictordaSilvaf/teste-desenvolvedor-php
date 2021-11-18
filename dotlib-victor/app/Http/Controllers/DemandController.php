<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Demand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DemandController extends Controller
{
    /**
     * Mostra uma lista do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Demand::paginate(20);

        $customers = Customer::all();
        $products = Product::all();
        /* foreach ($customers as $customer) {
            # code...
            DB::table('demands')->where($customer->customer_id)->value('email');
        }
 */
        return view('demands.index', compact('datas', 'customers', 'products'));
    }

    /**
     * Mostra o formulário para criação de um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        $products = Product::all();

        return view('demands.create', compact('products'), compact('customers'));
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        Validator::make($request->all(), [
            'customer_id' => 'required',
            'product_id' => 'required',
            'status' => 'required',
            'discount' => 'required|max:3'
        ], [
            'required' => 'Este campo é obrigatório.',
            'max' => 'O numero máximo de caracteres é :max.',
        ])->validate();

        Demand::create($request->all());

        return redirect()->route('pedidos.index')
            ->banner('Cliente criado com sucesso.');
    }

    /**
     * Mostra o recurso especificado.
     *
     * @param   $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $demand = Demand::findOrFail($id);
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
            'discount' => 'max:3'
        ]);

        $demand->update($request->all());

        return redirect()->route('pedidos.index')->banner('Pedido atualizado com sucesso.');
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

        return redirect()->route('pedidos.index')->banner('Pedido deletado com sucesso.');
    }

    /**
     * Cancelar um pedido.
     *
     * @param  $id
     */
    public function cancel($id)
    {
        $demand = Demand::findOrFail($id);
        $demand->status = 'canceled';
        $demand->save();
        return redirect()->route('pedidos.index')->banner('Pedido cancelado com sucesso.');
    }
}
