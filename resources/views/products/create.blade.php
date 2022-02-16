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
            <form action="">
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name" value="" class="">
                </div>
            </form>
        </div>
    </main>
@endsection
