@extends('layouts.main')

@section('content')
<aside>
    <div class="layout-order">
        <div class="order-wrapper container">
            <div class="order-section">
                <div class="heading d-flex justify-content-center p-5">
                    <header>
                        <h3>PLACE YOUR ORDER</h3>
                    </header>
                </div>
                <div class="form-wrapper container d-flex justify-content-center">
                    <form action="{{ route('order.store') }}" class="col-6" method="POST"> @csrf
                        <div class="form-section">
                            <div class="mb-3">
                                <label class="form-label" for="name">Receiver Name</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="receiver" class="form-control @error('receiver') is-invalid @enderror" id="receiver" placeholder="Receiver of the product" value="{{ old('receiver').$user->name }}" required autofocus/>
                                    @error('receiver')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="contact">Contact</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror" id="contact" placeholder="Contact of the receiver" value="{{ old('contact') }}" required autofocus/>
                                    @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="address">Address</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Address of the receiver" value="{{ old('address') }}" required autofocus/>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <input type="hidden" name="total_amount" value="{{ $total_amount }}">
                        </div><br>
                        <div class="submit d-flex justify-content-center">
                            <input type="submit" value="Pay Now" class="order-btn btn btn-primary">
                        </div><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
@endsection
