<style>
    form div,
    button {
        margin-top: 1.5%;
    }

</style>

<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <form class="form-group" action="{{route('produtos.store')}}" method="POST">
        @csrf
        <div class="form-group col-md-6">
            <label for="name_product">Nome do produto</label>
            <input name="name_product" type="text" class="@error('name_product') is-invalid @enderror form-control" id="name_product"
                placeholder="Nome do produto">
            @error('name_product')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-2">
            <label for="uni_price_product">Preço do produto *</label>
            <input name="uni_price_product" type="text" id="uni_price_product"
                class="@error('uni_price_product') is-invalid @enderror form-control cpf" placeholder="R$ 0.00">
            @error('uni_price_product')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-5">
            <label for="barcode_product">Código de barra *</label>
            <input name="barcode_product" type="number" maxlength="20" class="@error('barcode_product') is-invalid @enderror form-control"
                id="barcode_product" placeholder="000000000">
            @error('barcode_product')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-3">
            <label for="qnt_product">Quantidade de produtos *</label>
            <input name="qnt_product" type="number" id="qnt_product" class="@error('qnt_product') is-invalid @enderror form-control"
                placeholder="000">
            @error('qnt_product')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Criar produto</button>
    </form>
</div>
