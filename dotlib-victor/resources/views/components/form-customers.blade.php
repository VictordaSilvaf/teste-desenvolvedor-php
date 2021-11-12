<style>
    form div,
    button {
        margin-top: 1.5%;
    }

</style>


<div class="p-6 sm:px-20 bg-white border-b border-gray-200">



    <form class="form-group">
        @csrf
        <div class="form-group col-md-6">
            <label for="name_customer">Nome do produto</label>
            <input type="text" class="@error('name_customer') is-invalid @enderror form-control" id="name_customer"
                placeholder="Nome do produto">
            @error('name_customer')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-2">
            <label for="inputPassword4">Preço do produto *</label>
            <input type="number" id="inputPassword5" class="@error('registerError') is-invalid @enderror form-control"
                placeholder="R$ 0.00" aria-describedby="passwordHelpBlock">
            @error('registerError')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-5">
            <label for="inputEmail4">Código de barras *</label>
            <input type="number" class="@error('registerError') is-invalid @enderror form-control" id="inputEmail4"
                placeholder="000000000">
            @error('registerError')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-3">
            <label for="inputPassword4">Quantidade de produtos *</label>
            <input type="number" id="inputPassword5" class="@error('registerError') is-invalid @enderror form-control"
                placeholder="000" aria-describedby="passwordHelpBlock">
            @error('registerError')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
