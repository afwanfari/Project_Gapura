<div>
    <div>
        <h1>Product Catalog</h1>
        <div class="products">
            @foreach ($katalogs as $katalog)
                <div class="product">
                    <h2>{{ $katalog->name }}</h2>
                    <p>{{ $katalog->idkatalog }}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>
