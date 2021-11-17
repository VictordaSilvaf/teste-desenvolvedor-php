<style>
    form div,
    button {
        margin-top: 1.5%;
    }

</style>

<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <form class="form-group" action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <div class="form-group col-md-6">
            <label for="name_customer">Nome do cliente</label>
            <input name="name_customer" type="text" class="@error('name_customer') is-invalid @enderror form-control"
                id="name_customer" placeholder="Nome do cliente">
            @error('name_customer')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-2">
            <label for="cpf_customer">CPF *</label>
            <input name="cpf_customer" type="text" id="cpf_customer"
                class="@error('cpf_customer') is-invalid @enderror form-control" placeholder="000.000.000-00">
            @error('cpf_customer')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6">
            <label for="email_customer">Email</label>
            <input name="email_customer" type="email" class="@error('email_customer') is-invalid @enderror form-control"
                id="email_customer" placeholder="email@email.com">
            @error('email_customer')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar cliente</button>
    </form>
</div>
