<tr>
    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h5>{{ $order->id }}</h5>
        </div>
    </td>

    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h6>{{$order->fullname}}</h6>
        </div>
    </td>

    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h6>{{$order->address}}</h6>
        </div>
    </td>

    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h6>{{$order->phone}}</h6>
        </div>
    </td>

    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h6>{{$order->totalPrice()}}</h6>
        </div>
    </td>

    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h6>{{$order->status}}</h6>
        </div>
    </td>

    <td class="cart__close">
        {{-- <form action={{ route('deleteCart', $cart) }} method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-circle"><i class="fa fa-close"></i></button>
        </form> --}}
    </td>
</tr>
