    <!-- Header Component Begin -->
    <x-admin.admin-header />
    <!-- Header Component End -->
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
    @yield('admin-content')


    <!-- Footer Component Begin -->
    <x-admin.admin-footer />
    <!-- Footer Component End -->
