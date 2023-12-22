@extends('layout.adminLayout')

@section('admin-content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-warning mb-2" href={{ route('addProductPage') }}>Add Product</a>
                    <p class="card-title mb-0">Products</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Picture</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Sale</th>
                                    <th>Category</th>
                                    <th>Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td><img src={{ $item->picture }} alt=""></td>
                                        <td class="font-weight-bold">${{ $item->price }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td class="font-weight-medium">
                                            @if ($item->sale)
                                                <div class="badge badge-success">Yes</div>
                                            @else
                                                <div class="badge badge-danger">Yes</div>
                                            @endif
                                        </td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-primary">{{ $item->category }}</div>
                                        </td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-secondary">{{ $item->sale }}</div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div class="d-flex justify-content-center">
                            {{ $products->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
