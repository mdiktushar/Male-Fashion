@extends('layout.adminLayout')

@section('admin-content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Customer</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Username</th>
                                    <th>Date</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td style="font-size: small;">{{ $item->id }}</td>
                                        <td style="font-size: small;">{{ $item->user->fullname }}</td>
                                        <td style="font-size: small;">{{ $item->created_at->diffForHumans() }}</td>
                                        <td><a class="btn btn-secondary" href={{route('adminOrderDetailsPage', $item->id)}}>Detials</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div class="d-flex justify-content-center">
                            {{ $orders->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
