@extends('admin.layouts.main')

@section('admin-content')

<div class="layout-product">
    <div class="product-wrapper">
        <div class="product-section">
            <div class="product-header d-flex justify-content-center p-5">
                <h4>THE PRODUCTS!</h4>
            </div>
            <div class="product-table-wrapper">
                <div class="table-responsive product-table ">
                    <table class="table table-hover table-bordered">
                        <thead class="thead">
                            <tr>
                                <td>S.N.</td>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Weight</td>
                                <td>Size</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            @foreach ($products as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->weight }}</td>
                                <td>{{ $item->size }}</td>
                                <td>
                                    <a href="{{ route('product.edit',$item->id) }}"><button class="btn btn-secondary">EDIT</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="image-display-wrapper">
                <div class="category-images-division row">
                    @foreach ($products as $item)
                    <div class="image-display-with-name col-4 p-4">
                        <div class="image-section d-flex justify-content-center">
                            {{-- <img src="{{ asset('public\storage\images'). $item->image->path }}" alt=""> --}}
                            <img src="{{ asset('storage/images/'. $item->image) }}" alt="{{ $item->name }}"
                                class="img-fluid">
                        </div>
                        <div class="category-section d-flex justify-content-center p-2">
                            Name: {{ $item->name }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
