<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <h2><span>Nome do cliente: </span>{{ $customer->name_customer }}</h2>
                <p><span>ID: </span>{{ $customer->id }}</p>
                <p><span>CPF do cliente: </span>{{ $customer->cpf_customer }}</p>
                <p><span>Email do cliente: </span>{{ $customer->email_customer }}</p>

                <form action="{{ route('clientes.destroy', $customer->id) }}" method="POST" class="flex-column">
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Voltar</a>

                    <a href="{{ route('clientes.edit', $customer->id) }}" class="btn btn-success"
                        id='editProduct'>Editar</a>

                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </div>
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <h2><span>Nome do cliente: </span>{{ $customer->name_customer }}</h2>
                <p><span>ID: </span>{{ $customer->id }}</p>
                <p><span>CPF do cliente: </span>{{ $customer->cpf_customer }}</p>
                <p><span>Email do cliente: </span>{{ $customer->email_customer }}</p>

                <form action="{{ route('clientes.destroy', $customer->id) }}" method="POST" class="flex-column">
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Voltar</a>

                    <a href="{{ route('clientes.edit', $customer->id) }}" class="btn btn-success"
                        id='editProduct'>Editar</a>

                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </div>
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <h2><span>Nome do cliente: </span>{{ $customer->name_customer }}</h2>
                <p><span>ID: </span>{{ $customer->id }}</p>
                <p><span>CPF do cliente: </span>{{ $customer->cpf_customer }}</p>
                <p><span>Email do cliente: </span>{{ $customer->email_customer }}</p>

                <form action="{{ route('clientes.destroy', $customer->id) }}" method="POST" class="flex-column">
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Voltar</a>

                    <a href="{{ route('clientes.edit', $customer->id) }}" class="btn btn-success"
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
