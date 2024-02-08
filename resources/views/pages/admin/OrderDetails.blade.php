@extends('layout.adminLayout')

@section('admin-content')
    <div class="row">
        <div class="col-lg-6 col-md-6 mx-auto">
            <div class="d-flex justify-content-center text-center mb-4">
                <img class="rounded-circle border border-dark" width="150px" height="150px" src={{ auth()->user()->picture }}
                    alt="">
            </div>
            <div class="contact__form">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <h3>Order ID: {{ $order->id }}</h3>
                    <p>Name: <a href="">{{ $order->user->fullname }}</a></p>

                    <div class="col-lg-12 mb-4">
                        <select name="sale" class="form-control mx-auto @error('sale') border border-danger @enderror">
                            <option value="1" {{ strcmp($order->status, 'Pending') == 0 ? 'selected' : '' }}>Pending
                            </option>
                            <option value="0" {{ strcmp($order->status, 'Paid') == 0 ? 'selected' : '' }}>Paid</option>
                            <option value="0" {{ strcmp($order->status, 'In Process') == 0 ? 'selected' : '' }}>In
                                Process</option>
                            <option value="0" {{ strcmp($order->status, 'On The Way') == 0 ? 'selected' : '' }}>On The
                                Way</option>
                            <option value="0" {{ strcmp($order->status, 'Delivered') == 0 ? 'selected' : '' }}>
                                Delivered</option>
                        </select>
                    </div>

                    <p>Address: {{ $order->address }}</p>
                    <p>Address: {{ $order->phone }}</p>

                    <div class="row">
                        <div class="col-lg-12 mt-2">
                            <button class="btn-block btn-success rounded" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
