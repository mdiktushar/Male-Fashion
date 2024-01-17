@extends('layout.adminLayout')

@section('admin-content')
    <div class="row">
        <div class="col-lg-6 col-md-6 mx-auto">
            <div class="section-title">
                <span>Welcome to E-Commerse Store Admin</span>
                <h2>Edit Your Product</h2>
                <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                    strict attention.</p>
                @if (session('message'))
                    <span>{{ session('message') }}</span>
                @endif
            </div>
            <div class="contact__form">
                <form action={{ route('updateProduct', $product) }} method="POST" enctype="multipart/form-data"
                    class="form-group">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <input class="form-control" name="title" value={{ $product->title }} type="text"
                                placeholder="Product Name" class="@error('title') border border-danger @enderror">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12 mb-4">
                            <img class="rounded" src={{ $product->picture }} width="100px" alt={{ $product->title }}>
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
                                <option value="Footwear" {{ $product->category == 'Footwear' ? 'selected' : '' }}>Footwear
                                </option>
                                <option value="Huddy" {{ $product->category == 'Huddy' ? 'selected' : '' }}>Huddy</option>
                                <option value="T-Shirt" {{ $product->category == 'T-Shirt' ? 'selected' : '' }}>T-Shirt
                                </option>
                                <option value="Bag" {{ $product->category == 'Bag' ? 'selected' : '' }}>Bag</option>
                                <option value="Shirt" {{ $product->category == 'Shirt' ? 'selected' : '' }}>Shirt</option>
                            </select>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <select name="sale"
                                class="form-control mx-auto @error('sale') border border-danger @enderror">
                                <option value="1" {{ $product->sale == '1' ? 'selected' : '' }}>In Sale</option>
                                <option value="0" {{ $product->sale == '0' ? 'selected' : '' }}>Not In Sale</option>
                            </select>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <input class="form-control" name="price" value={{ $product->price }} type="number"
                                placeholder="Price" class="@error('price') border border-danger @enderror">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-6 mb-4">
                            <input class="form-control" name="quantity" value={{ $product->quantity }} type="number"
                                placeholder="Quantity" class="@error('quantity') border border-danger @enderror">
                            @error('quantity')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <textarea name="description" class="form-control @error('description') border border-danger @enderror"
                                placeholder="Description">{{ $product->description }}</textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <br>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
