<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/logo.png') }}" type="image/x-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Todo Material Icons CDN -->
    <link rel="stylesheet" href="{{ asset('css/iconfont/material-icons.css') }}" />
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <div class="container">
            <!-- -------- START OF ASIDE ------------ -->
            @include('layouts.sidebar')
            <!-- -------- END OF ASIDE ------------ -->
            <!-- -------- START OF MAIN ------------ -->
            @yield('content')

            <!-- -------- END OF MAIN ------------ -->
            <!-- -------- START OF RIGHT  ------------ -->
            <div class="right">
                @include('layouts.header')
                <div class="recent-updates">
                    <h2>Recent Updates</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="{{ asset('storage/profile-4.jpg') }}" alt="user avatar" />
                            </div>
                            <div class="message">
                                <p><b>Stero tECH </b>bought clair man for GH10.00</p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="{{ asset('storage/profile-3.jpg') }}" alt="user avatar" />
                            </div>
                            <div class="message">
                                <p><b>Stero tECH </b>bought clair man for GH10.00</p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="{{ asset('storage/profile-2.jpg') }}" alt="user avatar" />
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
                            <div>
                                <h5 class="success">+39&percnt;</h5>
                            </div>
                            <div>
                                <h3>3847</h3>
                            </div>
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
                            <div>
                                <h5 class="danger">-12&percnt;</h5>
                            </div>
                            <div>
                                <h3>1100</h3>
                            </div>
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
                            <div>
                                <h5 class="success">+20&percnt;</h5>
                            </div>
                            <div>
                                <h3>500</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -------- !END OF RIGHT --------  -->
        </div>
    @endguest


    <!-- Custom JS -->
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
