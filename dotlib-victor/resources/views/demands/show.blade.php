<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h2>Cliente</h2>
                    <p><span>Nome do cliente: </span>{{ $demand->customer()->get()->first()->name_customer }}</p>
                    <p><span>ID: </span>{{ $demand->customer()->get()->first()->id }}</p>
                    <p><span>CPF do cliente: </span>{{ $demand->customer()->get()->first()->cpf_customer }}</p>
                    <p><span>Email do cliente: </span>{{ $demand->customer()->get()->first()->email_customer }}</p>

                    <form
                        action="{{ route(
                            'clientes.destroy',
                            $demand->customer()->get()->first()->id,
                        ) }}"
                        method="POST" class="flex-column">
                        <a href="{{ route('clientes.index') }}" class="btn btn-primary">Voltar</a>

                        <a href="{{ route(
                            'clientes.edit',
                            $demand->customer()->get()->first()->id,
                        ) }}"
                            class="btn btn-success" id='editProduct'>Editar</a>

                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </div>

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h2>Produto</h2>
                    <p><span>Nome do produto: </span>{{ $demand->product()->get()->first()->name_product }}</p>
                    <p><span>ID: </span>{{ $demand->product()->get()->first()->id }}</p>
                    <p><span>Preço unitário: </span>{{ $demand->product()->get()->first()->uni_price_product }}</p>
                    <p><span>Código de barra: </span>{{ $demand->product()->get()->first()->barcode_product }}</p>
                    <p><span>Quantidade: </span>{{ $demand->product()->get()->first()->qnt_product }}</p>

                    <form
                        action="{{ route(
                            'produtos.destroy',
                            $demand->product()->get()->first()->id,
                        ) }}"
                        method="POST" class="flex-column">
                        <a href="{{ route('produtos.index') }}" class="btn btn-primary">Voltar</a>

                        <a href="{{ route(
                            'produtos.edit',
                            $demand->product()->get()->first()->id,
                        ) }}"
                            class="btn btn-success" id='editProduct'>Editar</a>

                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>

                </div>

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200 d-flex flex-row justify-content-between">
                    <p><span>Desconto: </span>{{ $demand->discount }}%</p>

                    <p><span>Total:
                        </span>{{ $demand->product()->get()->first()->qnt_product *
                            (($demand->product()->get()->first()->uni_price_product *
                                $demand->discount) /
                                100) }}
                    </p>

                </div>

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200 d-flex flex-row-reverse">
                    <a href="{{ route('pedidos.index') }}" class="btn btn-primary">Voltar</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>a
