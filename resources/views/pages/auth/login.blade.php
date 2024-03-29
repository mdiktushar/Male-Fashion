@extends('layout.mainLayout')

@section('content')
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <div class="section-title">
                        <span>Welcome to our shop</span>
                        <h2>Login To Your Account</h2>
                        <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                            strict attention.</p>

                        @if (session('message'))
                            <span>{{ session('message') }}</span>
                        @endif
                        @if (session('success'))
                            <span class="text-success">{{ session('success') }}</span>
                        @endif
                    </div>
                    <div class="contact__form">
                        <form action={{ route('login') }} method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input name="email" type="text" placeholder="Email"
                                        class="@error('email') border border-danger @enderror">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <input name="password" type="password" placeholder="Password"
                                        class="@error('password') border border-danger @enderror">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="site-btn">Login</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <div class="section-title">
                            <a href={{ route('forgetPasswordPage') }}><span>Forget Password</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
