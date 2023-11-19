@extends('layout.mainLayout')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>My Orders Detial</h4>
                        <div class="breadcrumb__links">
                            <a href={{ route('homePage') }}>Home</a>
                            <a href={{ route('shopPage') }}>Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                        <br>
                        <h6><strong>Order id: {{$orderitems[0]->order->id}}</strong></h6>
                        <h6><strong>Name: {{$orderitems[0]->order->fullname}}</strong></h6>
                        <h6>Phone: {{$orderitems[0]->order->phone}}</h6>
                        <p>Address: {{$orderitems[0]->order->address}}</p>
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
                <div class="col-lg-12">
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
                                    <th>Order ID</th>
                                    <th>Full Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($orders->reverse() as $item) --}}
                                    {{-- Cart Item Start --}}
                                    {{-- <x-order :order="$item" /> --}}
                                    {{-- Cart Item End --}}
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection