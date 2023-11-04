<tr>
    <td class="product__cart__item">
        <div class="product__cart__item__pic">
            <img src="img/shopping-cart/cart-1.jpg" alt="">
        </div>
        <div class="product__cart__item__text">
            <h6>{{$cart->product()->first()->title}}</h6>
            <h5>${{$cart->product()->first()->price}}</h5>
        </div>
    </td>
    <td class="quantity__item">
        <div class="quantity">
                <input readonly type="text" value={{$cart->quantity}}>
        </div>
    </td>
    <td class="cart__price">$ {{$cart->product()->first()->price * $cart->quantity}}</td>
    <td class="cart__close"><i class="fa fa-close"></i></td>
</tr>