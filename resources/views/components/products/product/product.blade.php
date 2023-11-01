<div
    class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix @if ($product->created_at->greaterThanOrEqualTo(now()->subDays(5))) {{ 'new-arrivals' }} @endif
@if ($product->sale) {{ 'hot-sales' }} @endif">
    <div class="product__item">
        <div class="product__item__pic set-bg" data-setbg={{ $product->picture }}>
            @if ($product->created_at->greaterThanOrEqualTo(now()->subDays(5)))
                <span class="label">New</span>
            @endif
            <ul class="product__hover">
                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                <li><a href="#"><img src="img/icon/compare.png" alt="">
                        <span>Compare</span></a></li>
                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
            </ul>
        </div>
        <div class="product__item__text">
            <h6>{{ $product->title }}</h6>
            <a href="#" class="add-cart">+ Add To Cart</a>
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
</div>
{{-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
    <div class="product__item">
        <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
            <ul class="product__hover">
                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                <li><a href="#"><img src="img/icon/compare.png" alt="">
                        <span>Compare</span></a></li>
                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
            </ul>
        </div>
        <div class="product__item__text">
            <h6>Piqué Biker Jacket</h6>
            <a href="#" class="add-cart">+ Add To Cart</a>
            <div class="rating">
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <h5>$67.24</h5>
            <div class="product__color__select">
                <label for="pc-4">
                    <input type="radio" id="pc-4">
                </label>
                <label class="active black" for="pc-5">
                    <input type="radio" id="pc-5">
                </label>
                <label class="grey" for="pc-6">
                    <input type="radio" id="pc-6">
                </label>
            </div>
        </div>
    </div>
</div> --}}
