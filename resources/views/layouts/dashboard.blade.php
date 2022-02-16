<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Todo Material Icons CDN -->
    <link rel="stylesheet" href="{{ asset('css/iconfont/material-icons.css') }}" />
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Custom JS -->
    <script src="{{ asset('js/index.js') }}"></script>
</head>

<body>
    <div class="container">
        <!-- -------- START OF ASIDE ------------ -->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="img/logo.png" alt="" />
                    <!-- todo add logo here -->
                    <h1>NO<span class="danger">BLE</span></h1>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="index.html" class="active">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="customers.html">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Customers</h3>
                </a>
                <a href="sales.html">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Sales</h3>
                </a>
                <a href="analytics.html">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Analytics</h3>
                </a>
                <a href="message.html">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Messages</h3>
                    <span class="message-count">20</span>
                </a>
                <a href="product.html">
                    <span class="material-icons-sharp">shopping_cart</span>
                    <h3>Product</h3>
                </a>
                <a href="report.html">
                    <span class="material-icons-sharp">report</span>
                    <h3>Reports</h3>
                </a>
                <a href="setting.html">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="add.html">
                    <span class="material-icons-sharp">add</span>
                    <h3>Add Product</h3>
                </a>
                <a href="login.html">
                    <span class="material-icons-sharp">exit_to_app</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- -------- END OF ASIDE ------------ -->
        <!-- -------- START OF MAIN ------------ -->
        <main>
            <h2>Dashboard</h2>
            <div class="date">
                <input type="date" name="" id="" />
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
                <h2>Recent Sales</h2>
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
        <!-- -------- END OF MAIN ------------ -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp light">mode</span>
                    <span class="material-icons-sharp dark">mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey <b>Stero</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/profile-1.jpg" alt="user avatar" />
                    </div>
                </div>
            </div>
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/profile-2.jpg" alt="user avatar" />
                        </div>
                        <div class="message">
                            <p><b>Stero tECH </b>bought clair man for GH10.00</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/profile-3.jpg" alt="user avatar" />
                        </div>
                        <div class="message">
                            <p><b>Stero tECH </b>bought clair man for GH10.00</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/profile-4.jpg" alt="user avatar" />
                        </div>
                        <div class="message">
                            <p><b>Stero tECH </b>bought clair man for GH10.00</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ------------------ END OF RECENT UPDATES -------------------- -->
            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-sharp">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>DEBTORS</h3>
                            <small class="text-muted">last 24 Hours</small>
                        </div>
                        <h5 class="success">+39&percnt;</h5>
                        <h3>3847</h3>
                    </div>
                </div>
                <div class="item ofline">
                    <div class="icon">
                        <span class="material-icons-sharp">local_mall</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>CREDITORS</h3>
                            <small class="text-muted">last 24 Hours</small>
                        </div>
                        <h5 class="danger">-12&percnt;</h5>
                        <h3>1100</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-icons-sharp">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>CUSTOMERS</h3>
                            <small class="text-muted">last 24 Hours</small>
                        </div>
                        <h5 class="success">+20&percnt;</h5>
                        <h3>500</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
