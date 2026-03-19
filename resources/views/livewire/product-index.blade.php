<div class="bg-white rounded-4 shadow-sm overflow-hidden">

    <div class="p-4 border-bottom bg-light bg-opacity-10">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0 text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </span>
                    <input class="form-control border-start-0 ps-0 custom-search" wire:model.live="search"
                        placeholder="Cerca un prodotto per nome...">
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="mx-4 mt-3 alert alert-custom-success py-2" role="alert">
            <small class="fw-bold">{{ session('success') }}</small>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th class="ps-4 py-3 text-uppercase small fw-bold text-muted" style="width: 80px;">#</th>
                    <th class="py-3 text-uppercase small fw-bold text-muted">Nome Prodotto</th>
                    <th class="py-3 text-uppercase small fw-bold text-muted">Pagine</th>
                    <th class="py-3 text-uppercase small fw-bold text-muted text-center">Anno</th>
                    <th class="pe-4 py-3 text-uppercase small fw-bold text-muted text-end">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td class="ps-4 fw-medium text-muted">{{ $product->id }}</td>
                        <td>
                            <span class="fw-bold" style="color: var(--text-main);">{{ $product->name }}</span>
                        </td>
                        <td>
                            <span class="badge rounded-pill bg-light text-dark border">{{ $product->pages ?? '-' }}
                                pag.</span>
                        </td>
                        <td class="text-center">
                            <span class="text-muted">{{ $product->year ?? '-' }}</span>
                        </td>
                        <td class="pe-4 text-end">
                            <div class="btn-group shadow-sm rounded-3 overflow-hidden">
                                <a class="btn btn-action-edit btn-sm px-3"
                                    href="{{ route('product.edit', ['product' => $product]) }}">
                                    Modifica
                                </a>
                                <button class="btn btn-action-delete btn-sm px-3"
                                    wire:click="delete({{ $product->id }})"
                                    onclick="confirm('Sei sicuro di voler eliminare questo prodotto?') || event.stopImmediatePropagation()">
                                    Elimina
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">
                            Nessun prodotto trovato.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
