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
                    <form class="form-group" action="{{ route('clientes.update', $customer) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group col-md-6">
                            <label for="name_customer">Nome do cliente</label>
                            <input value="{{ $customer->name_customer }}" name="name_customer" type="text"
                                class="@error('name_customer') is-invalid @enderror form-control" id="name_customer"
                                placeholder="Nome do cliente">
                            @error('name_customer')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-2 mt-2">
                            <label for="cpf_customer">CPF *</label>
                            <input value="{{ $customer->cpf_customer }}" name="cpf_customer" type="text"
                                maxlength="11" id="cpf_customer"
                                class="@error('cpf_customer') is-invalid @enderror form-control"
                                placeholder="12345678912">
                            @error('cpf_customer')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 mt-2">
                            <label for="email_customer">Email</label>
                            <input value="{{ $customer->email_customer }}" name="email_customer" type="email"
                                class="@error('email_customer') is-invalid @enderror form-control" id="email_customer"
                                placeholder="email@email.com">
                            @error('email_customer')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mt-2">Atualizar cliente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>a
