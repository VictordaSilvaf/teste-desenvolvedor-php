<style>
    form div,
    button {
        margin-top: 1.5%;
    }

</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pedidos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        {{-- {{dd($customers)}} --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <form class="form-group" action="{{ route('pedidos.store') }}" method="POST">
                        @csrf

                        <div class="form-group col-md-6">
                            <label for="customer_id">Nome do cliente</label>
                            {{-- <input type="text" value="teste" /> --}}
                            <select class="form-select" id="customer_id" name="customer_id">
                                <option selected></option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name_customer }}
                                    </option>
                                @endforeach
                            </select>

                            @error('customer_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="product_id">Nome do produto</label>
                            <select class="form-select" id="product_id" name="product_id">
                                <option selected></option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name_product }}
                                    </option>
                                @endforeach
                            </select>

                            @error('product_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 d-flex flex-row">

                            <div class="form-group col-md-6">
                                <label for="status">Status do pedido *</label>
                                <select class="form-select" id="status" name="status">
                                    <option selected value="open">Aberto</option>
                                    <option value="paid">Pago</option>
                                    <option value="canceled">Cancelado</option>
                                </select>

                                @error('status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="discount">Desconto</label>
                                <input name="discount" type="number" id="discount" min="1" max="100"
                                    class="@error('discount') is-invalid @enderror form-control" placeholder="0 a 100">
                                @error('discount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Criar produto</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
