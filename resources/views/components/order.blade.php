<tr>
    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h5>{{ $order->id }}</h5>
        </div>
    </td>

    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h6>{{ $order->fullname }}</h6>
        </div>
    </td>

    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h6>{{ $order->address }}</h6>
        </div>
    </td>

    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h6>{{ $order->phone }}</h6>
        </div>
    </td>

    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h6>{{ $order->totalPriceWithQuantity() }}</h6>
        </div>
    </td>

    <td class="product__cart__item">
        <div class="product__cart__item__text">
            <h6>{{ $order->status }}</h6>
        </div>
    </td>

    <td class="cart__close">
        <a class="btn btn-success" href={{ route('ordersDetails', $order) }}>Details</a>
    </td>
</tr>
