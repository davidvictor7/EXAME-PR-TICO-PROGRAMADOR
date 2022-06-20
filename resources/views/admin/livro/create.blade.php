<x-nav>
    <div class="container" style="width: 500px;">
        <form method="post" action="{{ route('store') }}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Titulo do Livro</label>
              <input class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ISBN</label>
                <input class="form-control" id="ISBN" name="ISBN" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Autor</label>
                <input class="form-control" id="autor" name="autor" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ano de Lançamento</label>
                <input class="form-control" id="ano" name="ano" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-danger" href="{{ route('index') }}">Cancelar</a>
        </form>
    </div>
</x-nav>
