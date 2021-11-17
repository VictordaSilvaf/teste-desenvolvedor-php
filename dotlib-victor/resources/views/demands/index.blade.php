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
                    <table class="mb-4">
                        <thead>
                            <tr>
                                <td class="col-1">Cliente</td>
                                <td class="col-1">Produto</td>
                                <td class="col-1">Desconto</td>
                                <td class="col-1">Status</td>
                                <td class="col-1">
                                    <a href={{ route('pedidos.create') }} class="btn btn-primary mb-2"
                                        id='addDemand'>Adicionar
                                        cliente</a>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $item => $data)
                                <tr>
                                    <td>{{ $data->customer()->get()->first()->name_customer }}</td>
                                    <td>{{ $data->product()->get()->first()->name_product }}</td>
                                    <td>{{ $data->discount }}%</td>
                                    <td>{{ $data->status }}</td>
                                    <td class="btns-tabela">
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('pedidos.show', $data->id) }}"
                                                class="crudButton text-primary" id='showProduct'>Visualizar</a>

                                            <a href="{{ route('pedidos.edit', $data->id) }}"
                                                class="crudButton text-success" id='editProduct'>Editar</a>

                                            <a href="{{ route('pedidos.cancel', $data->id) }}"
                                                class="crudButton text-danger" id='editProduct'>Cancelar</a>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                    {{ $datas->onEachSide(5)->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>a
