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
            <p>Hey <b>{{ Auth::user()->name }}</b></p>
            <small class="text-muted"
                align="right">{{ Auth::user()->admin === 'on' ? 'Admin' : 'Employee' }}</small>
        </div>
        <div class="profile-photo">
            <img src="{{ asset('storage/profile-1.jpg') }}" alt="user avatar" />
        </div>
    </div>
</div>
