<div>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit="store">

        <div class="mb-3">
            <label class="form-label">Nome Prodotto</label>
            <input type="text" class="form-control" wire:model.blur="name">
        </div>

        <div class="mb-3">
            <label class="form-label">Pagine del Prodotto</label>
            <input type="text" class="form-control" wire:model.blur="pages">
        </div>

        <div class="mb-3">
            <label class="form-label">Anno del Prodotto</label>
            <input type="text" class="form-control" wire:model.blur="year">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
</div>
