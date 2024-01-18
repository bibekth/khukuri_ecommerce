@extends('admin.layouts.main')

@section('admin-content')

<aside>
    <div class="layout-image">
        <div class="image-wrapper">
            <div class="image-section">
                <div class="image-header">
                    <h4>Images</h4>
                </div>
                <div class="image-display-section row">
                    @foreach ($images as $item)
                    <div class="display-image-section col-4 p-2">
                        <div class="image-with-name">
                            <img src="{{ asset('storage/images/' . $item->path) }}" alt="" class="img-fluid ">
                        </div>
                        <div class="image-name d-flex justify-content-center align-items-center p-3">
                            {{ $item->name }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</aside>

@endsection
