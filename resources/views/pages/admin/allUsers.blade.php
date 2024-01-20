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
                                    <th>Email</th>
                                    <th>Activation</th>
                                    <th>Joined</th>
                                    <th>Last Update</th>
                                    <th>Roal</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td style="font-size: small;">{{ $item->id }}</td>
                                        <td style="font-size: small;"><img src={{ $item->picture }} alt=""></td>
                                        <td style="font-size: small;">{{ $item->fullname }}</td>
                                        <td style="font-size: x-small;">{{ $item->email }}</td>
                                        <td style="font-size: small;">{{ $item->is_active ? 'Active' : 'Unactive' }}</td>
                                        <td style="font-size: x-small;">{{ $item->created_at->diffForHumans() }}</td>
                                        <td style="font-size: x-small;">{{ $item->updated_at->diffForHumans() }}</td>


                                        @if (auth()->user()->id == $item->id)
                                            <td class="font-weight-medium">
                                                <div class="badge badge-success">{{ $item->role }}</div>
                                            </td>

                                            <td class="font-weight-medium">
                                                <div class="badge badge-secondary">Null</div>
                                            </td>
                                        @else
                                            <td style="font-size: small;">
                                                <form action="{{ route('updateRole', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="role" value="{{ $item->role === 'admin' ? 'customer' : 'admin' }}">
                                                    <button
                                                        class="badge {{ $item->role === 'admin' ? 'badge-success' : 'badge-warning' }}">{{ $item->role }}
                                                    </button>
                                                </form>
                                            </td>
                                            <td style="font-size: small;">
                                                <form action="{{ route('deleteUser', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="badge badge-danger">Delete</button>
                                                </form>
                                            </td>
                                        @endif


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
