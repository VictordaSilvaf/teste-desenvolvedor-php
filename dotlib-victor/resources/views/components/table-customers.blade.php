<link href="{{ asset('/css/table.css') }}" rel="stylesheet">
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <table>
        <thead>
            <tr>
                <td class="col-1">Nome</td>
                <td class="col-1">CPF</td>
                <td class="col-1">Email</td>
                <td class="col-1">
                    <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-2"
                        id='adicionarCliente'>Adicionar
                        cliente</a>
                </td>
            </tr>
        </thead>
        <tbody>

            @foreach ($datas as $item => $data)

                <tr>
                    <td>{{ $data->name_customer }}</td>
                    <td>{{ $data->cpf_customer }}</td>
                    <td>{{ $data->email_customer }}</td>
                    <td class="btns-tabela">
                        <form action="{{ route('clientes.destroy', $data->id) }}" method="POST"
                            class="flex-column">

                            <a href="{{ route('clientes.show', $data->id) }}" class="crudButton text-primary"
                                id='showProduct'>Visualizar</a>

                            <a href="{{ route('clientes.edit', $data->id) }}" class="crudButton text-success"
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
