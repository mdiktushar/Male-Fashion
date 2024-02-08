@extends('layout.adminLayout')

@section('admin-content')
    <div class="row">
        <div class="col-lg-12 col-md-12 mx-auto">
            <div class="contact__form">
                <form action={{route('adminOrderUpdate', $order)}} method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <h3>Order ID: {{ $order->id }}</h3>
                    
                    <p>Name: <a href="">{{ $order->user->fullname }}</a></p>
                    <p>Address: {{ $order->address }}</p>
                    <p>Phone: {{ $order->phone }}</p>
                    <p>Status: </p>
                    <div class="col-lg-6 mb-4">
                        <select name="status" class="form-control mx-auto @error('sale') border border-danger @enderror">
                            <option value="Pending" {{ strcmp($order->status, 'Pending') == 0 ? 'selected' : '' }}>Pending
                            </option>
                            <option value="Paid" {{ strcmp($order->status, 'Paid') == 0 ? 'selected' : '' }}>Paid</option>
                            <option value="In Process" {{ strcmp($order->status, 'In Process') == 0 ? 'selected' : '' }}>In
                                Process</option>
                            <option value="On The Way" {{ strcmp($order->status, 'On The Way') == 0 ? 'selected' : '' }}>On The
                                Way</option>
                            <option value="Delivered" {{ strcmp($order->status, 'Delivered') == 0 ? 'selected' : '' }}>
                                Delivered</option>
                        </select>
                    </div>
                    <h4>Price: {{sprintf("%.2f",$order->totalPriceWithQuantity())}}$</h4>
                    <p>Date of Order: {{ $order->created_at}}</p>
                    <div class="row">
                        <div class="col-lg-12 mt-2">
                            <button class="btn btn-success rounded" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-12 grid-margin stretch-card mt-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Order List</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->orderItems->all() as $item)
                                    <tr>
                                        <td><a href={{route('singleProductPage', $item->product->id)}}><img class="rounded-circle border border-dark" width="50px" height="50px"
                                            src={{ $item->product->picture }} alt=""></a></td>
                                        <td style="font-size: small;"><a href={{route('singleProductPage', $item->product->id)}}>{{ $item->product->title }}</a></td>
                                        <td style="font-size: small;">{{ $item->quantity }} Peaces</td>
                                        <td style="font-size: small;">{{ $item->price }}$</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
