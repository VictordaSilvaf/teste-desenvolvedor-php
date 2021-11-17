<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <form class="form-group" action="{{ route('produtos.update', $product) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group col-md-6">
                            <label for="name_product">Nome do produto</label>
                            <input value="{{$product->name_product}}" name="name_product" type="text"
                                class="@error('name_product') is-invalid @enderror form-control" id="name_product"
                                placeholder="Nome do produto">
                            @error('name_product')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="uni_price_product">Preço do produto *</label>
                            <input value="{{$product->uni_price_product}}" name="uni_price_product" type="number" min="0.00" max="900000.00" step="0.01" id="uni_price_product"
                                class="@error('uni_price_product') is-invalid @enderror form-control"
                                placeholder="R$ 0.00">
                            @error('uni_price_product')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-5">
                            <label for="barcode_product">Código de barra *</label>
                            <input value="{{$product->barcode_product}}" name="barcode_product" type="number"
                                class="@error('barcode_product') is-invalid @enderror form-control" id="barcode_product"
                                placeholder="000000000">
                            @error('barcode_product')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="qnt_product">Quantidade de produtos *</label>
                            <input value="{{$product->qnt_product}}" name="qnt_product" type="number" id="qnt_product"
                                class="@error('qnt_product') is-invalid @enderror form-control" placeholder="000">
                            @error('qnt_product')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Atualizar produto</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>a
