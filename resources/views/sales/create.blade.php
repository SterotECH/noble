@extends('layouts.dashboard')

@section('content')
    <main>
        <h2>Dashboard</h2>
        <div class="date">
            <input type="date" name="" id="" value="<?php echo date('Y-m-d'); ?>" />
        </div>
        <!-- --------------- END OF INSIGHTS ------------ -->
        <div class="recent-sales">
            <h2>Sales</h2>
            @if ($errors->any())
                <div class="error">
                    @foreach ($errors->all() as $error)
                        <li class="text-red">
                            {{ $error }}
                        </li>
                    @endforeach
                </div>
            @endif

            <form action="/products" Method="POST">
                @csrf


                <div class="form-group">
                    <div class="col-5">
                        <label for="product_name" class="text-muted">Product Name</label>
                    </div>
                    <div class="col-7">
                        <select name="product_name" id="">
                            <option selected>Select Product</option>
                            @foreach ($prod as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->product_name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-5">
                        <label for="product_name" class="text-muted">Cost Price (GHC)</label>
                    </div>
                    <div class="col-7">
                        <input type="number" name="cost_price" placeholder="Cost Price">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-5">
                        <label for="product_name" class="text-muted">Selling Price (GHC)</label>
                    </div>
                    <div class="col-7">
                        <input type="number" name="selling_price" placeholder="Selling Price">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-5">
                        <label for="product_name" class="text-muted">Quantity</label>
                    </div>
                    <div class="col-7">
                        <input type="number" name="quantity" placeholder="Quantity">
                    </div>
                </div>
                <input type="submit" value="Add Product">
            </form>
        </div>
    </main>
@endsection
