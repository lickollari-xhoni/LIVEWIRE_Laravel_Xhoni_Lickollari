<div>
    <div class="container mt-5">
        <input class="form-control" wire:model.live="search" placeholder="Cerca un prodotto...">
    </div>

    <table class="table mt-5" wire:poll.5s>
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
                        <a class="btn btn-warning" href="{{ route('product.edit', ['product' => $product->id]) }}">Modifica</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
