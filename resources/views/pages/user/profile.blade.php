@extends('layout.mainLayout')

@section('content')
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <div class="d-flex justify-content-center text-center mb-4">
                        <img class="rounded-circle border border-dark" width="150px" height="150px" src={{ auth()->user()->picture }}
                            alt="">
                    </div>
                    <div class="contact__form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="text-muted">Full Name</label>
                                    <input type="text" placeholder="{{ auth()->user()->fullname }}">
                                </div>
                                <div class="col-lg-6">
                                    <label class="text-muted">Email</label>
                                    <input type="text" placeholder="{{ auth()->user()->email }}">
                                </div>

                                <div class="col-lg-12">
                                    <label class="text-muted">Photo</label>
                                    <input name="photo" type="file"
                                        class="form-control @error('photo') border border-danger @enderror"
                                        placeholder="Photo URL">
                                    @error('photo')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

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
