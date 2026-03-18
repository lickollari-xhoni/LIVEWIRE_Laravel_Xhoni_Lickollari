<div>

    <table class="table">
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

                </tr>
            @endforeach

        </tbody>
    </table>


</div>
