<div class="p-4 bg-white rounded-4 shadow-sm border border-light">
    
    <div class="mb-4">
        <h4 class="fw-bold" style="color: var(--text-main);">Modifica Prodotto</h4>
        <p class="text-muted small">Aggiorna le informazioni del prodotto selezionato.</p>
    </div>

    @if (session('success'))
        <div class="alert alert-custom-success d-flex align-items-center mb-4" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <div>{{ session('success') }}</div>
        </div>
    @endif

    <form wire:submit="update">

        <div class="mb-4">
            <label class="form-label fw-semibold mb-1" style="color: var(--text-main);">Nome Prodotto</label>
            <input type="text" class="form-control custom-input" wire:model.blur="name">
            @error('name')
                <div class="small text-danger mt-1 fw-medium">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold mb-1" style="color: var(--text-main);">Pagine del Prodotto</label>
            <input type="text" class="form-control custom-input" wire:model.blur="pages">
            @error('pages')
                <div class="small text-danger mt-1 fw-medium">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold mb-1" style="color: var(--text-main);">Anno del Prodotto</label>
            <input type="text" class="form-control custom-input" wire:model.blur="year">
            @error('year')
                <div class="small text-danger mt-1 fw-medium">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('product.index') }}" class="btn btn-light px-4">Annulla</a>
            <button type="submit" class="btn btn-primary px-5 fw-bold text-white">
                Aggiorna Prodotto
            </button>
        </div>

    </form>
</div>