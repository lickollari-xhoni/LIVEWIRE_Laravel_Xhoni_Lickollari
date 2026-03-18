<div>
    <div class="container mt-5">
        <input class="form-control" wire:model.live="search" placeholder="Cerca un prodotto...">
    </div>

    @if (session('success'))
        <div class="alert alert-success mt-5" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-5" >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Prodotto</th>
                <th scope="col">Numero Pagine</th>
                <th scope="col">Anno di Rilascio</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->pages ?? '-' }}</td>
                    <td>{{ $product->year ?? '-' }}</td>
                    <td>
                        <a class="btn btn-warning"
                            href="{{ route('product.edit', ['product' => $product]) }}">Modifica</a>

                        <button class="btn btn-danger" wire:click="delete({{ $product->id }})">Elimina</button>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
