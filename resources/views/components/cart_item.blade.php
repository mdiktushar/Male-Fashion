<tr>
    <td class="product__cart__item">
        <div class="product__cart__item__pic">
            <img height="80px" src={{ $cart->product()->first()->picture }} alt="">
        </div>
        <div class="product__cart__item__text">
            <h6>{{ $cart->product()->first()->title }}</h6>
            <h5>${{ $cart->product()->first()->price }}</h5>
        </div>
    </td>
    <td class="quantity__item">
        <div class="quantity">
            <form action={{ route('updateCart', $cart) }} method="POST">
                @csrf
                @method('PATCH')
                <input style="max-width: 60px;%" type="number" name="quantity" value={{ $cart->quantity }}
                    max={{$cart->product()->first()->quantity + $cart->quantity}} min='1'
                >
                <button class="btn btn-success" style="font-size: 60%">Update</button>
            </form>
        </div>
    </td>
    <td class="cart__price">$ {{ $cart->product()->first()->price * $cart->quantity }}</td>
    <td class="cart__close">
        <form action={{ route('deleteCart', $cart) }} method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-circle"><i class="fa fa-close"></i></button>
        </form>
    </td>
</tr>
