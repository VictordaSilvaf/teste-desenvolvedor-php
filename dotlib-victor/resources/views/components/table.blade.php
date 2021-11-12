<link href="{{ asset('/css/table.css') }}" rel="stylesheet">
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <table>
        <thead>
            <tr>
                <td class="col-1">Nome</td>
                <td class="col-1">Preço Un.</td>
                <td class="col-1">Código de barra</td>
                <td class="col-1">Estoque</td>
                <td class="col-1">
                    <a href={{ route('produtos.create') }} class="btn btn-primary mb-2"
                        id='adicionarDesconto'>Adicionar
                        produto</a>
                </td>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $item => $product)

                <tr>
                    <td>{{ $product->name_product }}</td>
                    <td>{{ $product->uni_price_product }}</td>
                    <td>{{ $product->barcode_product }}</td>
                    <td>{{ $product->qnt_product }}</td>
                    <td class="btns-tabela">
                        <form action="{{ route('produtos.destroy', $product->id) }}" method="POST"
                            class="flex-column">
                            <a href="{{ route('produtos.show', $product->id) }}" class="crudButton text-primary"
                                id='showProduct'>Visualizar</a>

                            <a href="{{ route('produtos.edit', $product->id) }}" class="crudButton text-success"
                                id='editProduct'>Editar</a>

                            @csrf
                            @method("DELETE")
                            <button type="submit" class="crudButton text-danger">Deletar</button>
                        </form>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</div>
