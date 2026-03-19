<x-layouts>

    <section class="container mt-5">
        
        <div class="d-flex justify-content-between align-items-center mb-5 p-4 bg-white rounded-4 shadow-sm border-start border-primary border-4">
            <div>
                <h2 class="fw-bold mb-0" style="color: var(--text-main);">Gestione Prodotti</h2>
                <p class="text-muted mb-0 small">Visualizza, modifica o aggiungi nuovi elementi al database</p>
            </div>
            
            <a href="{{ route('product.create') }}" class="btn btn-primary d-flex align-items-center gap-2 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                <span>Nuovo Prodotto</span>
            </a>
        </div>

        <div class="bg-white rounded-4 shadow-sm p-2">
            @livewire('product-index')
        </div>

    </section>

</x-layouts>