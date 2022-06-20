<x-nav>
    <div class="container" style="width: 50%">
        <table class="table table-striped border">
            <thead>
              <tr>
                <th>Titulo</th>
                <th>ISBN</th>
                <th>Autor</th>
                <th>Ano de Lançamento</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($livro as $item)
                <tr>
                    <td>{{ $item->titulo }}</td>
                    <td>{{ $item->ISBN }}</td>
                    <td>{{ $item->autor }}</td>
                    <td>{{ $item->ano }}</td>
                    <td>
                        <form action="{{ route('edit', $item->id) }}" method="post">
                            @csrf
                            <button class="btn btn-primary" type="submit">Editar</button>
                        </form>
                        <form action="{{ route('delete', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </td>

                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</x-nav>
