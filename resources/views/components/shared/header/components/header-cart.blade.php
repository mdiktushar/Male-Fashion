<a href={{ route('cartPage') }}><img src={{ asset('img/icon/cart.png') }} alt="">
    <span>{{ count(auth()->user()->carts()->get()) }}</span></a>
<div class="price">${{ auth()->user()->cartTotal() }}</div>
