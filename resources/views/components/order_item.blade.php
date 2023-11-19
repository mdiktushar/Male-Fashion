<tr>
    <td class="product__cart__item">
        <div class="product__cart__item__pic">
            <a href={{ route('singleProductPage', $item->product()->first()) }}><img height="80px"
                    src={{ $item->product()->first()->picture }} alt=""></a>

        </div>
        <div class="product__cart__item__text">
            <a href={{ route('singleProductPage', $item->product()->first()) }}>
                <h6>{{ $item->product()->first()->title }}</h6>
            </a>
            <h5>${{ $item->product()->first()->price }}</h5>
        </div>
    </td>
    <td class="quantity__item">
        <p>{{ $item->quantity }}</p>
    </td>
    <td class="cart__price">$ {{ $item->product()->first()->price * $item->quantity }}</td>
</tr>
