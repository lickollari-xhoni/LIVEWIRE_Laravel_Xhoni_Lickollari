<x-layouts>

    <section class="container mt-5">

        <div class="container mb-5">
            Crea nuovo prodotto <a href="{{ route('product.create') }}" class="btn btn-primary">Nuovo</a>
        </div>

        @livewire('product-index')

    </section>



</x-layouts>
