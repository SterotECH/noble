@extends('layouts.dashboard')

@section('content')
    <main>
        <h2>Dashboard</h2>
        <div class="date">
            <input type="date" name="" id="" value="<?php echo date('Y-m-d'); ?>" />
        </div>

        <div class="insights">
            <div class="sales">
                <span class="material-icons-sharp">analytics</span>
                <div class="middle">
                    <div class="left">
                        <h3 class="subtitle">Sales</h3>
                        <h4 class="amount">GHC25,024</h4>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>81&percnt;</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">last 24 Hours</small>
            </div>
            <!-- -------- END OF SALES --------  -->
            <div class="expenses">
                <span class="material-icons-sharp">bar_chart</span>
                <div class="middle">
                    <div class="left">
                        <h3 class="subtitle">Expenses</h3>
                        <h4 class="amount">GHC10,024</h4>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>44&percnt;</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">last 24 Hours</small>
            </div>
            <!-- -------- END OF EXPENSES --------  -->
            <div class="income">
                <span class="material-icons-sharp">stacked_line_chart</span>
                <div class="middle">
                    <div class="left">
                        <h3 class="subtitle">Income</h3>
                        <h4 class="amount">GHC25,024</h4>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>44&percnt;</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">last 24 Hours</small>
            </div>
            <!-- -------- END OF INCOME --------  -->
        </div>
        <!-- --------------- END OF INSIGHTS ------------ -->
        <div class="recent-sales">
            <h2>Products Running Out of Stock</h2>
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
                    @foreach ($products as $product)
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
                    @endforeach
                </tbody>
            </table>
            <div class="pages">
                {{ $products->links() }}
            </div>
        </div>
    </main>
@endsection
