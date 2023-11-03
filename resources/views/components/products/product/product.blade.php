<div class="product__item">
    <div class="product__item__pic set-bg" data-setbg={{ $product->picture }}>
        @if ($product->created_at->greaterThanOrEqualTo(now()->subDays(5)))
            <span class="label">New</span>
        @endif
        <ul class="product__hover">
            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
            <li><a href="#"><img src="img/icon/compare.png" alt="">
                    <span>Compare</span></a></li>
            <li><a href={{ route('singleProductPage', $product) }}><img src="img/icon/search.png" alt=""></a></li>
        </ul>
    </div>
    <div class="product__item__text">
        <h6>{{ $product->title }}</h6>
        <a href={{ route('singleProductPage', $product) }} class="add-cart">+ Add To Cart</a>
        <div class="rating">
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <h5>${{ number_format($product->price, 2) }}</h5>
        <div class="product__color__select">
            <label for="pc-1">
                <input type="radio" id="pc-1">
            </label>
            <label class="active black" for="pc-2">
                <input type="radio" id="pc-2">
            </label>
            <label class="grey" for="pc-3">
                <input type="radio" id="pc-3">
            </label>
        </div>
    </div>
</div>
