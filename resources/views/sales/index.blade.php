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
                    <a href="sales/create">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M403.3 32H285.1c-3.7 0-7.2 1.5-9.8 4.1L40.1 272.2c-10.8 10.8-10.8 28.4 0 39.2l111.5 112.5C162.4 434.7 179 440 195 426l231.9-232.3c2.6-2.6 4.1-6.1 4.1-9.8V59.7c0-15.3-12.4-27.7-27.7-27.7zm-45.9 107.5c-19.6 2.1-36-14.4-33.9-33.9 1.5-14.3 13-25.7 27.3-27.3 19.6-2.1 36 14.4 33.9 33.9-1.5 14.3-13 25.8-27.3 27.3z" />
                                <path
                                    d="M456 80.3V194c0 3.7-1.5 7.2-4.1 9.8L192.7 463l8.8 8.8c10.8 10.8 28.4 10.8 39.2 0l235.2-236.2c2.6-2.6 4.1-6.1 4.1-9.8V107.7c0-14-10.5-25.6-24-27.4z" />
                            </svg>
                        </span>
                        <h3>Sell a product</h3>
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
                        <th>Customer Type</th>
                        <th>Selling Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->cost_price }}</td>
                            <td>{{ $product->selling_price }}</td>
                            <td class="{{ $product->quantity <= 2 ? 'danger' : 'primary' }}">{{ $product->quantity }}
                            </td>
                            <td class="{{ $product->quantity <= 2 ? 'danger' : 'primary' }}">
                                {{ $product->quantity <= 2 ? 'Out -of-Stock' : 'In-stock' }}</td>
                            <td><a class="primary" href="/products/{{ $product->id }}">Details</a></td>
                        </tr>
                    @empty
                        <p><b>Table empty</b></p>
                    @endforelse --}}
                </tbody>
            </table>
            <div class="pages">
                {{-- {{ $products->links() }} --}}
            </div>
        </div>
    </main>
@endsection
