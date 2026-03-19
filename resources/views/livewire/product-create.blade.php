<div class="p-4 bg-white rounded-4 shadow-sm border border-light">
    
    @if (session('success'))
        <div class="alert alert-custom-success d-flex align-items-center mb-4" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
            </svg>
            <div>{{ session('success') }}</div>
        </div>
    @endif

    <form wire:submit="store">

        <div class="mb-4">
            <label class="form-label fw-semibold mb-1" style="color: var(--text-main);">Nome Prodotto</label>
            <input type="text" class="form-control custom-input" wire:model.blur="name" placeholder="Inserisci il nome...">
            @error('name')
                <div class="small text-danger mt-1 fw-medium">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold mb-1" style="color: var(--text-main);">Pagine del Prodotto</label>
            <input type="text" class="form-control custom-input" wire:model.blur="pages" placeholder="Es: 250">
            @error('pages')
                <div class="small text-danger mt-1 fw-medium">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold mb-1" style="color: var(--text-main);">Anno del Prodotto</label>
            <input type="text" class="form-control custom-input" wire:model.blur="year" placeholder="Es: 2024">
            @error('year')
                <div class="small text-danger mt-1 fw-medium">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary py-2 fw-bold">
                Salva Prodotto
            </button>
        </div>

    </form>
</div>
