@extends('layouts.dashboard')

@section('content')
    <main>
        <h2>Dashboard</h2>
        <div class="date">
            <input type="date" name="" id="" value="<?php echo date('Y-m-d'); ?>" />
        </div>
        <!-- --------------- END OF INSIGHTS ------------ -->
        <div class="recent-sales">
            <h2>Add Product</h2>
            @if ($errors->any())
                <div class="error">
                    @foreach ($errors->all() as $error)
                        <li class="text-red">
                            {{ $error }}
                        </li>
                    @endforeach
                </div>
            @endif

            <form action="/products/{{ $product->id }}" Method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <div class="col-5">
                        <label for="product_name" class="text-muted">Image</label>
                    </div>
                    <div class="col-7">
                        <input type="file" name="image" placeholder="Product Name">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-5">
                        <label for="product_name" class="text-muted">Product Name</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="product_name" placeholder="Product Name"
                            value="{{ $product->product_name }}">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-5">
                        <label for="cost_price" class="text-muted">Cost Price</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="cost_price" placeholder="Product Name"
                            value="{{ $product->cost_price }}">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-5">
                        <label for="selling_price" class="text-muted">Selling Price</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="selling_price" placeholder="Product Name"
                            value="{{ $product->selling_price }}">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-5">
                        <label for="quantity" class="text-muted">Quantity</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="quantity" placeholder="Product Name" value="{{ $product->quantity }}">
                    </div>
                </div>


                <input type="submit" value=" Update {{ $product->product_name }}">
            </form>
        </div>
    </main>
@endsection
