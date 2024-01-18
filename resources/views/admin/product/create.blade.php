@extends('admin.layouts.main')

@section('admin-content')

<div class="layout-product d-flex justify-content-center">
    <div class="product-wrapper p-5">
        <div class="product-section">
            <div class="product-header d-flex justify-content-center pb-5">
                <h4>Add new Product!</h4>
            </div>
            <div class="form-wrapper">
                <div class="form-section">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control name" id="name">
                        </div> --}}
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <div class="input-group input-group-merge">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name of the product" value="{{ old('name') }}" required>
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
                                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price of the product" value="{{ old('price') }}" required>
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
                                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Description of the product" value="{{ old('description') }}">
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
                                <input type="text" name="weight" class="form-control @error('weight') is-invalid @enderror" id="weight" placeholder="Weight of the product" value="{{ old('weight') }}" >
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
                                <input type="text" name="size" class="form-control @error('size') is-invalid @enderror" id="size" placeholder="Size of the product" value="{{ old('size') }}">
                                @error('size')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="name">Image</label>
                            <div class="input-group input-group-merge">
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" placeholder="Image of the product" value="{{ old('image') }}" required>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control price" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control description" id="description">
                        </div>
                        <div class="mb-3">
                            <label for="weight" class="form-label">Weight</label>
                            <input type="text" class="form-control weight" id="weight">
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Size</label>
                            <input type="text" class="form-control size" id="size">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image">
                        </div>
                        <div class="mb-3 d-flex justify-content-center pt-5">
                            <input type="submit" class="btn btn-outline-primary submit" id="Submit" value="Submit">
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

@endsection
