@extends('layouts.main')

@section('content')

<aside>
    <div class="container">
        <div class="heading">
            <h2 style="color:#9F0909">SHOPPING CART</h2>
        </div>
        @php
        $grandtotal = 0;
        @endphp
        <div class="table-responsive">
            <table class="table table-success table-striped table-bordered">
                <thead class="thead">
                    <tr>
                        {{-- <th>IMAGE</th> --}}
                        <th>SN</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>

                <tbody class="tbody">
                    @foreach ($cart as $item)
                    <tr>
                        {{-- <td>{{ $item->product->image }}</td> --}}
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>Rs {{ $item->product->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>Rs {{ $item->product->price * $item->quantity }}</td>
                    </tr>
                    @php
                    $grandtotal += $item->product->price * $item->quantity;
                    @endphp
                    @endforeach
                </tbody>
                <tfoot class="tfoot bg-light ">
                    <tr>
                        {{-- <td colspan="4" style="text-align: center"><strong>Grand Total</strong></td> --}}
                        <th colspan="4" style="text-align: center">Grand Total</th>
                        <th>Rs {{ $grandtotal }}</th>
                        {{-- <td><strong>Rs {{ $grandtotal }} </strong></td> --}}
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
    <div class="button container">
        <a href="{{ route('product') }}"> <button type="button" class="btn btn-warning">Add more to cart</button></a>
        <form action="{{ route('order.create') }}" method="get">
            @csrf
            <input type="hidden" name="total_amount" value="{{ $grandtotal }}">
            <button type="submit" class="btn btn-warning">Proceed Checkout</button>
        </form>
        {{-- <a href="{{ route('order.create') }}"><button type="button" class="btn btn-warning">Proceed
                Checkout</button></a> --}}
        {{-- <a href="/checkout"><button type="button" class="btn btn-warning">Proceed To Checkout</button></a> --}}
    </div>

    <style>
        .heading {
            padding: 20px;
        }

        .button {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
    </style>
</aside>

@endsection
