<!-- Product Section Begin -->
<section class="product spad">
    {{ $products }}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Best Sellers</li>
                    <li data-filter=".new-arrivals">New Arrivals</li>
                    <li data-filter=".hot-sales">Hot Sales</li>
                </ul>
            </div>
        </div>
        <div class="row product__filter">
            @foreach ($products as $item)
                <x-products.product.product :product="$item" />
            @endforeach
        </div>
    </div>
</section>
<!-- Product Section End -->
