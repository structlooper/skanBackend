@extends('admin.layouts.nav')
@section('adminNav')
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="adminDashboard"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Skan  </span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="{{route('adminDashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        
        <li class="menu-header">Pages</li>
          <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="briefcase"></i><span>Website</span></a>
            <ul class="dropdown-menu">
             
              <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                    data-feather="database"></i><span>Slide Data</span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('insertBanner')}}">Insert New Data</a></li>
                  <li><a href="{{route('showAll')}}">View Slide Data</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                    data-feather="check-circle"></i><span>About</span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('aboutData')}}">View About</a></li>
                </ul>
              </li>
              
              <li><a class="nav-link" href="{{route('category')}}">Category</a></li>
              <li><a class="nav-link" href="{{route('termsAndCondition')}}">Terms And Condition</a></li>
              <li><a class="nav-link" href="{{route('privacyPolicy')}}">Privacy Policy</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="book"></i><span>Study Material</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('insertStudyMaterial')}}">Add New Material</a></li>
              <li><a href="#">View All Material</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="book-open"></i><span>Quiz</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('mcqsQuestion') }}">Quiz Management</a></li>
            </ul>
          </li>

        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="user-check"></i><span>S-Admin</span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('showAlls-admin')}}"><i
              data-feather="users"></i><span>Show S-Admins</span></a></li>
            <li><a href="{{route('newAdmin')}}"><i
              data-feather="user-plus"></i><span>Register New S-Admins</span></a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="user-check"></i><span>Users</span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('showAllsUsers')}}"><i
              data-feather="users"></i><span>Show All Users</span></a></li>
          </ul>
        </li>
        
        
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="settings" ></i><span>Settings</span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('changePassword')}}">Change Password</a></li>
          </ul>
        </li>
        
        
      </ul>
    </aside>
</div>
  @yield('adminSide')   
@endsection