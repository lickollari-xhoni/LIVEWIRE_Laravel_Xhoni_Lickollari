<div>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit="update">

        <div class="mb-3">
            <label class="form-label">Nome Prodotto</label>
            <input type="text" class="form-control" wire:model.blur="name">
            @error('name')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Pagine del Prodotto</label>
            <input type="text" class="form-control" wire:model.blur="pages">
            @error('pages')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Anno del Prodotto</label>
            <input type="text" class="form-control" wire:model.blur="year">
            @error('year')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>

    </form>
</div>
