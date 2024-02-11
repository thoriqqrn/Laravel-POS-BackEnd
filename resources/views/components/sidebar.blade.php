<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">RESTO THOR</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Menu</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-user"></i><span>Users</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-list"></i><span>Products</span></a>
            </li>
        </ul>

    </aside>
</div>
