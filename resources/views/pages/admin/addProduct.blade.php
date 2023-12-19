@extends('layout.adminLayout')

@section('admin-content')
    <div class="row">
        <div class="col-lg-6 col-md-6 mx-auto">
            <div class="section-title">
                <span>Welcome to E-Commerse Store Admin</span>
                <h2>Add Your Product</h2>
                <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                    strict attention.</p>
                @if (session('message'))
                    <span>{{ session('message') }}</span>
                @endif
            </div>
            <div class="contact__form">
                <form action={{ route('addProduct') }} method="POST" enctype="multipart/form-data" class="form-group">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <input class="form-control" name="title" type="text" placeholder="Product Name"
                                class="@error('title') border border-danger @enderror">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12 mb-4">
                            <input name="picture" type="file"
                                class="form-control @error('picture') border border-danger @enderror"
                                placeholder="picture URL">
                            @error('picture')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12 mb-4">
                            <select name="category"
                                class="form-control mx-auto @error('category') border border-danger @enderror">
                                <option value="null" selected>Category</option>
                                <option value="Footwear">Footwear</option>
                                <option value="T-Shirt">T-Shirt</option>
                            </select>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <input class="form-control" name="price" type="number" placeholder="Price"
                                class="@error('price') border border-danger @enderror">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6 mb-4">
                            <input class="form-control" name="quantity" type="number" placeholder="Quantity"
                                class="@error('quantity') border border-danger @enderror">
                            @error('quantity')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <textarea name="description" class="form-control @error('description') border border-danger @enderror"
                                placeholder="Description"></textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <br>
                            <button type="submit" class="btn btn-success">Add Product</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
