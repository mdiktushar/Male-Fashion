    <!-- Header Component Begin -->
    <x-header />
    <!-- Header Component End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <div class="section-title">
                        <span>Welcome to our shop</span>
                        <h2>Register Your Account</h2>
                        <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                            strict attention.</p>
                    </div>
                    <div class="contact__form">
                        <form action={{route('signup')}} method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input name="fullname" type="text" placeholder="Full Name" class="@error('fullname') border border-danger @enderror">
                                    @error('fullname')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <input name="email" type="text" placeholder="Email" class="@error('email') border border-danger @enderror">
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <input name="photo" type="file" class="form-control @error('photo') border border-danger @enderror" placeholder="Photo URL" >
                                    @error('photo')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <input name="password" type="password" placeholder="Password" class="@error('password') border border-danger @enderror">
                                    @error('password')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <input name="password_confirmation" type="password" placeholder="Conferm Password" class="@error('password') border border-danger @enderror">
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="site-btn">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->


    <!-- Footer Component Begin -->
    <x-footer />
    <!-- Footer Component End -->