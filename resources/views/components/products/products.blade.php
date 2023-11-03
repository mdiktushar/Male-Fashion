<!-- Product Section Begin -->
<section class="product spad">
    {{-- {{ $products }} --}}
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
                <div
                    class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix @if ($item->created_at->greaterThanOrEqualTo(now()->subDays(5))) {{ 'new-arrivals' }} @endif
@if ($item->sale) {{ 'hot-sales' }} @endif">
                    <x-products.product.product :product="$item" />
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Product Section End -->
