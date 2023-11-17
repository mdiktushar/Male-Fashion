@extends('layout.mainLayout')

@section('content')
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
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
            <div class="row">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <div class="d-flex justify-content-center text-center mb-4">
                        <img class="rounded-circle border border-dark" width="150px" height="150px"
                            src={{ auth()->user()->picture }} alt="">
                    </div>
                    <div class="contact__form">
                        <form action={{ route('updateProfile') }} method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="text-muted">Full Name</label>
                                    <input name="fullname"
                                        class="form-control @error('fullname') border border-danger @enderror"
                                        type="text" placeholder="{{ auth()->user()->fullname }}">
                                    @error('fullname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label class="text-muted">Email</label>
                                    <input name="email"
                                        class="form-control @error('email') border border-danger @enderror" type="text"
                                        placeholder="{{ auth()->user()->email }}">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- <div class="col-lg-12">
                                    <label class="text-muted">Photo</label>
                                    <input name="photo" type="file"
                                        class="form-control @error('picture') border border-danger @enderror"
                                        placeholder="Photo URL">
                                    @error('picture')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div> --}}

                                <div class="col-lg-12">
                                    <button class="btn-block site-btn" type="submit" class="site-btn">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
