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
                data-feather="briefcase"></i><span>Working Pages</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="category">Category</a></li>
              <li><a class="nav-link" href="termsAndCondition">Terms And Condition</a></li>
              <li><a class="nav-link" href="privacyPolicy">Privacy Policy</a></li>
            </ul>
          </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="user-check"></i><span>Auth</span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Register New Users</a></li>
            <li><a href="changePassword">Change Password</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="user-check"></i><span>Slide Data</span></a>
          <ul class="dropdown-menu">
            <li><a href="insertBanner">Insert New Data</a></li>
            <li><a href="showAll">View Slide Data</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="user-check"></i><span>About Data</span></a>
          <ul class="dropdown-menu">
            <li><a href="aboutData">View About Data</a></li>
            {{-- <li><a href="showAll">View Slide Data</a></li> --}}
          </ul>
        </li>
        
        
      </ul>
    </aside>
</div>
  @yield('adminSide')   
@endsection