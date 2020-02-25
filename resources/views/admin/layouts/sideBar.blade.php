@extends('admin.layouts.nav')
@section('adminNav')
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="adminDashboard"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="adminDashboard" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        
        <li class="menu-header">Pages</li>
          <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="briefcase"></i><span>Widgets</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="widget_chart">Chart Widgets</a></li>
              <li><a class="nav-link" href="widget_data">Data Widgets</a></li>
            </ul>
          </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="user-check"></i><span>Auth</span></a>
          <ul class="dropdown-menu">
            <li><a href="auth-login.html">Login</a></li>
            <li><a href="auth-register.html">Register</a></li>
            <li><a href="auth-forgot-password.html">Forgot Password</a></li>
            <li><a href="auth-reset-password.html">Reset Password</a></li>
            <li><a href="subscribe.html">Subscribe</a></li>
          </ul>
        </li>
        
        
      </ul>
    </aside>
</div>
  @yield('adminSide')   
@endsection