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
            <h2>Products</h2>
            <table>
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Product Name</th>
                        <th>Product Number</th>
                        <th>Payment</th>
                        <th>status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Foldable Mini Drone</td>
                        <td>85631</td>
                        <td>Cash</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Foldable Mini Drone</td>
                        <td>85631</td>
                        <td>Cash</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Foldable Mini Drone</td>
                        <td>85631</td>
                        <td>Cash</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Foldable Mini Drone</td>
                        <td>85631</td>
                        <td>Cash</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Foldable Mini Drone</td>
                        <td>85631</td>
                        <td>Cash</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                </tbody>
            </table>
            <a href="#">Todo Pagenation</a>
        </div>
    </main>
@endsection
