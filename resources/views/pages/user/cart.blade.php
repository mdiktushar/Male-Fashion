@extends('layout.mainLayout')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href={{ route('homePage') }}>Home</a>
                            <a href={{ route('shopPage') }}>Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $item)
                                    {{-- Cart Item Start --}}
                                    <x-cart_item :cart="$item" />
                                    {{-- Cart Item End --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href={{ route('shopPage') }}>Continue Shopping</a>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ {{ $totalPrice }}</span></li>
                            <li>Total <span>$ {{ $totalPrice }}</span></li>
                        </ul>
                        <form action={{route('placeOrder')}} method="POST">
                            @csrf
                            <input class="form-control mt-2 @error('fullname') border border-danger @enderror"
                                type="text" name="fullname" placeholder="Full Name">
                            @error('fullname')
                                <p class="text-danger">{{ 'Please Enter Your Full Name' }}</p>
                            @enderror
                            <input class="form-control mt-2 @error('address') border border-danger @enderror" type="text"
                                name="address" placeholder="Address">
                            @error('address')
                                <p class="text-danger">{{ 'Please Enter Your Address' }}</p>
                            @enderror
                            <input class="form-control mt-2 @error('phone') border border-danger @enderror" type="text"
                                name="phone" placeholder="Contace Number">
                            @error('phone')
                                <p class="text-danger">{{ 'Please Enter Your Contace Numner' }}</p>
                            @enderror
                            <button class="primary-btn mt-2 btn-block" type="submit">Proceed to checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
