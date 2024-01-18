@extends('admin.layouts.main')

@section('admin-content')

<aside>
    <div class="layout-product d-flex justify-content-center">
        <div class="product-wrapper p-5">
            <div class="product-section">
                <div class="product-header d-flex justify-content-center pb-5">
                    <h4>Add new Product!</h4>
                </div>
                <div class="form-wrapper">
                    <div class="form-section">
                        <form action="{{ route('product.update',['product'=>$product->id]) }}" method="get" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name of the product" value="{{ old('name').$product->name }}" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="name">Price</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price of the product" value="{{ old('price').$product->price }}" required>
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="description">Description</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Description of the product" value="{{ old('description').$product->description }}">
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="name">Weight</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="weight" class="form-control @error('weight') is-invalid @enderror" id="weight" placeholder="Weight of the product" value="{{ old('weight').$product->weight }}">
                                    @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="name">Size</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="size" class="form-control @error('size') is-invalid @enderror" id="size" placeholder="Size of the product" value="{{ old('size').$product->size }}">
                                    @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="mb-3">
                                <label class="form-label" for="name">Image</label>
                                <div class="input-group input-group-merge">
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" placeholder="Image of the product" value="{{ old('image').asset('storage/images/'.$product->image) }}">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="submit mb-3 d-flex justify-content-center pt-5">
                                <button type="submit" class="btn btn-outline-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>

@endsection
