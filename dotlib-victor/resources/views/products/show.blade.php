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
                    <h2><span>Nome do produto: </span>{{ $product->name_product }}</h2>
                    <p><span>ID: </span>{{ $product->id }}</p>
                    <p><span>Preço unitário: </span>{{ $product->uni_price_product }}</p>
                    <p><span>Código de barra: </span>{{ $product->barcode_product }}</p>
                    <p><span>Quantidade: </span>{{ $product->qnt_product }}</p>

                    <form action="{{ route('produtos.destroy', $product->id) }}" method="POST" class="flex-column">
                        <a href="{{ route('produtos.index') }}" class="btn btn-primary">Voltar</a>

                        <a href="{{ route('produtos.edit', $product->id) }}" class="btn btn-success"
                            id='editProduct'>Editar</a>

                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>a
