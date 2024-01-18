@extends('admin.layouts.main')

@section('admin-content')

<aside>
    <div class="layout-image">
        <div class="image-wrapper">
            <div class="image-section">
                <div class="image-heading d-flex justify-content-center p-5">
                    <h4>Add new Image</h4>
                </div>
                <div class="form-wrapper d-flex justify-content-center">
                    <div class="form-section col-6">
                        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
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
                                <label class="form-label" for="image">Image</label>
                                <div class="input-group input-group-merge">
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" placeholder="Image of the product" value="{{ old('image') }}" required>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="submit mb-3 d-flex justify-content-center pt-5">
                                <button type="submit" class="btn btn-outline-primary">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>

@endsection
