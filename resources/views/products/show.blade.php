@extends('layouts.dashboard')

@section('content')
    <main>
        <h2>Dashboard</h2>
        <div class="row">
            <div class="date">
                <input type="date" name="" id="" value="<?php echo date('Y-m-d'); ?>" />
            </div>
            @if (Auth::user())
                <div class="add">
                    <a href="products/edit">
                        <span class=" material-icons-sharp">add</span>
                        <a href="/products/{{ $product->id }}/edit">
                            <h3>Update {{ $product->product_name }}</h3>
                        </a>
                    </a>
                </div>
            @endif
        </div>
        <!-- --------------- END OF INSIGHTS ------------ -->
        <div class="recent-sales">
            <h2 class="product_name">{{ $product->product_name }}</h2>
            <article class="flex-wrap">
                <figure>
                    <img src="{{ $product->image_path ? asset('storage/product/' . $product->image_path) : asset('storage/profile-3.jpg') }}"
                        alt="{{ $product->name }} image">
                </figure>
                <div class="desc">
                    <p><b>Quantity</b>&nbsp;{{ $product->quantity }}</p>
                    <p><b>Cost Price</b>&nbsp;GHC{{ $product->cost_price }}.00</p>
                    <p><b>Total Cost Price</b>&nbsp;GHC{{ $product->cost_price * $product->quantity }}.00</p>
                    <p><b>Selling Price</b>&nbsp;GHC{{ $product->selling_price }}.00</p>
                    <p><b>Total Selling Price</b>&nbsp;GHC{{ $product->selling_price * $product->quantity }}.00</p>
                    <p><b>Profit </b>{{ ($product->selling_price - $product->cost_price) * $product->quantity }}.00</p>
                    <p><b>Last Stocked At </b>{{ date('F j, Y h:i:s A', strtotime($product->updated_at)) }}
                    </p>
                </div>
            </article>
        </div>
    </main>
@endsection
