<style>
    form div,
    button {
        margin-top: 1.5%;
    }

</style>
{{dd($products)}}

<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <form class="form-group" action="{{ route('pedidos.store') }}" method="POST">
        @csrf

        <div class="form-group col-md-6">
            <label for="products_id">Nome do cliente</label>
            <select class="form-select" id="products_id">
                <option selected>Escolha o cliente...</option>
                <option value="1">One</option>
            </select>

            @error('products_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6">
            <label for="demands_id">Nome do produto</label>
            <select class="form-select" id="demands_id">
                <option selected>Escolha o cliente...</option>
                <option value="1">One</option>
            </select>

            @error('demands_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Criar produto</button>
    </form>
</div>
