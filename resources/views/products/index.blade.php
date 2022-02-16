@extends('layouts.dashboard')

@section('content')
    <main>
        <h2>Dashboard</h2>
        <div class="date">
            <input type="date" name="" id="" value="<?php echo date('Y-m-d'); ?>" />
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
