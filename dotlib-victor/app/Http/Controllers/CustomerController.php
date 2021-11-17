<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Mostra uma lista do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Customer::paginate(20)->sortBy("name_customer");
        return view('customers.index', compact('datas'));
    }

    /**
     * Mostra o formulário para criação de um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masks = array(".", "-", "/", " ");
        $cpf_customer_unmasked = str_replace($masks, "", $request->cpf_customer);

        $request->merge([
            'cpf_customer' => $cpf_customer_unmasked,
        ]);

        Validator::make($request->all(), [
            'name_customer' => 'required|max:100',
            'cpf_customer' => 'required|max:11',
            'email_customer' => 'max:160',
        ], [
            'max' => 'O numero máximo de numeros é :max.',
            'required' => 'Este campo é obrigatório.',
        ])->validate();

        $request->cpf_customer;

        Customer::create($request->all());

        return redirect()->route('clientes.index')
            ->banner('Cliente criado com sucesso.');
    }

    /**
     * Mostra o recurso especificado.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    /**
     * Exibe determinado formulario para edição do dado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
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
        $customer = Customer::findOrFail($id);

        Validator::make($request->all(), [
            'name_customer' => 'required|max:100',
            'cpf_customer' => 'required|max:11',
            'email_customer' => 'max:160',
        ], [
            'max' => 'O numero máximo de caracteres é :max.',
            'required' => 'Este campo é obrigatório.',
        ])->validate();

        $customer->update($request->all());

        return redirect()->route('clientes.index')
            ->banner('Cliente atualizado com sucesso.');
    }

    /**
     * Remova o recurso especificado do armazenamento.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();
        return redirect()->route('clientes.index')->banner('Produto deletado com sucesso.');
    }
}
