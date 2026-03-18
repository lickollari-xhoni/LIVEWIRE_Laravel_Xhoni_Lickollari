<div>
    <form>
        <div class="mb-3">
            <label class="form-label">Nome Prodotto</label>
            <input type="text" class="form-control" wire:model="name">
        </div>

        <div class="mb-3">
            <label class="form-label">Pagine del Prodotto</label>
            <input type="text" class="form-control" wire:model="pages">
        </div>

        <div class="mb-3">
            <label class="form-label">Anno del Prodotto</label>
            <input type="text" class="form-control" wire:model="year">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
