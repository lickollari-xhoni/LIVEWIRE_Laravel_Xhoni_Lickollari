<x-layouts>

    <section class="container mt-5">
        
        <div class="mb-4 d-flex align-items-center">
            <a href="{{ route('product.index') }}" class="btn btn-outline-secondary btn-sm rounded-circle me-3" title="Torna indietro">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
            </a>
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('product.index') }}" class="text-decoration-none" style="color: var(--primary);">Prodotti</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: var(--text-muted);">Modifica</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                @livewire('product-edit', ['product' => $product])
            </div>
        </div>

    </section>

</x-layouts>