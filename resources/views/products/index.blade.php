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
                    <a href="products/create">
                        <span class="material-icons-sharp">add</span>
                        <h3>Add Product</h3>
                    </a>
                </div>
            @endif
        </div>
        <!-- --------------- END OF INSIGHTS ------------ -->
        <div class="recent-sales">
            <h2>Products</h2>
            <table>
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                        <th>Selling Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->cost_price }}</td>
                            <td>{{ $product->selling_price }}</td>
                            <td class="{{ $product->quantity <= 2 ? 'danger' : 'primary' }}">{{ $product->quantity }}
                            </td>
                            <td class="{{ $product->quantity <= 2 ? 'danger' : 'primary' }}">
                                {{ $product->quantity <= 2 ? 'Out -of-Stock' : 'In-stock' }}</td>
                            <td class="primary">Details</td>
                        </tr>
                    @empty
                        <p><b>Table empty</b></p>
                    @endforelse
                </tbody>
            </table>
            <div class="pages">
                {{ $products->links() }}
            </div>
        </div>
    </main>
@endsection
