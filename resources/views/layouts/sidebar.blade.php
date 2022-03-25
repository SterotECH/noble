<aside>
    <div class="top">
        <div class="logo">
            <img src="{{ asset('storage/logo.png') }}" alt="Noble Logo" />
            <!-- todo add logo here -->
            <h1>NO<span class="                                        danger">BLE</span></h1>
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
        </div>
    </div>
    <div class="sidebar">
        <a href="{{ route('home') }}" class="{{ request()->is('home') ? 'active' : '' }}">
            <span class="material-icons-sharp">dashboard</span>
            <h3>Dashboard</h3>
        </a>
        <a href="/customers" class="{{ request()->is('customers*') ? 'active' : '' }}">
            <span class="material-icons-sharp">person_outline</span>
            <h3>Customers</h3>
        </a>
        <a href="/sales" class="{{ request()->is('sales*') ? 'active' : '' }}">
            <span class="material-icons-sharp">receipt_long</span>
            <h3>Sales</h3>
        </a>
        <a href="" class="{{ request()->is('analytics*') ? 'active' : '' }}">
            <span class="material-icons-sharp">insights</span>
            <h3>Analytics</h3>
        </a>
        <a href="" class="{{ request()->is('messages*') ? 'active' : '' }}">
            <span class="material-icons-sharp">mail_outline</span>
            <h3>Messages</h3>
            <span class="message-count">20</span>
        </a>
        <a href="/products" class="{{ request()->is('products*') ? 'active' : '' }}">
            <span class="material-icons-sharp">shopping_cart</span>
            <h3>Product</h3>
        </a>
        <a href="{{ route('reports') }}" class="{{ request()->is('reports*') ? 'active' : '' }}">
            <span class="material-icons-sharp">report</span>
            <h3>Reports</h3>
        </a>
        <a href="" class="{{ request()->is('settings/*') ? 'active' : '' }}">
            <span class="material-icons-sharp">settings</span>
            <h3>Settings</h3>
        </a>

        <div>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" height: 12px
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </span>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</aside>
