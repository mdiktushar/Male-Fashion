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
                                    <th>ID</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($users as $item) --}}
                                <tr>
                                    {{-- <td style="font-size: small;">{{ }}</td>
                                    <td style="font-size: small;"><img src={{ }} alt=""></td>
                                    <td style="font-size: small;">{{ }}</td>
                                    <td style="font-size: x-small;">{{ }}</td>
                                    <td style="font-size: small;">{{ }}</td>
                                    <td style="font-size: x-small;">{{ }}</td>
                                    <td style="font-size: x-small;">{{ }}</td> --}}
                                </tr>
                                {{-- @endforeach --}}
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
