@extends('admin.layouts.sideBar')
@section('adminTitle')
    Update Details
@endsection

@section('adminStyleCss')

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/css/app.min.css">
  <link rel="stylesheet" href="../assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="../assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="../assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />

@endsection
@section('adminSide')
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
          <div class="navbar-bg"></div>
          
          <!-- Main Content -->
          <div class="main-content">
            <section class="section">
              <div class="section-body">
               
                <div class="row">
                  <div class="col-sm-2"></div>
                    <div class="card">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  @if (session('status'))
                      <div class="alert alert-success alert-dismissible" role="alert">
                          {{session('status')}}
                      </div>
                  @endif
                  @if (session('error'))
                      <div class="alert alert-danger alert-dismissible" role="alert">
                          {{session('error')}}
                      </div>
                  @endif
                      
                      <div class="card-body">
                        <div class="table-responsive">
                            <div class="container border rounded pt-2">
                                <form method="post"  action="updationUserData/{{ $user->id }}" >
                                        @csrf
                                        @method('PUT')
                                        <h2>Update Records</h2>
                                        
                                            <div class="form-group clearfix">
                                              <label class="col-sm-12 control-label ">
                                                Name
                                              </label>
                                              <div class="row">
                                              <div class="col-lg-5">
                                              <input   type="text" class="heading-1-text" value="{{$user->firstName}}"     name='firstName' >
                                              </div>
                                              <div class="col-lg-5">
                                              <input   type="text" class="heading-1-text" value="{{$user->lastName}}"     name='lastName' >
                                              </div>
                                            </div>
                                            </div>
                                            
                                            <div class="form-group clearfix">
                                                <label class="col-sm-12 control-label ">
                                                  Email
                                                </label>
                                                <div class="mx-2">
                                                    <input   type="text" class="heading-1-text" value="{{$user->email}}"     name='email' >
                                                </div>
                                              </div>
                                            <div class="form-group clearfix">
                                                <label class="col-sm-12 control-label ">
                                                  Mobile
                                                </label>
                                                <div class="mx-2">
                                                    <input   type="text" class="heading-1-text" value="{{$user->mobile}}"     name='mobile' >
                                                </div>
                                              </div>
                                            <div class="form-group clearfix">
                                                <label class="col-sm-12 control-label ">
                                                  profile
                                                </label>
                                                <div class="mx-2">
                                                    <input   type="text" class="heading-1-text" value="{{$user->is_admin}}"     name='is_admin' >
                                                </div>
                                              </div>
                                            
                                              
                                        <div class="col-sm-12 padd">
                                          <input type="submit" class="btn btn-warning btn-lg" >
                                          </div>
                                </form>
                                <form method="post"  action="updateUserPassword/{{ $user->id }}" >
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group clearfix">
                                            <label class="col-sm-12 control-label ">
                                              New Password
                                            </label>
                                            <div class="mx-2">
                                                <input   type="text" class="heading-1-text" required  name='password' >
                                            </div>
                                          </div>
                                            
                                              
                                        <div class="col-sm-12 padd">
                                          <input type="submit" value="Update Password" class="btn btn-dark btn-lg" >
                                          </div>
                                </form>
                            </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  </div>
                </div>
               
              </div>
            
      </div>
          
@endsection

@include('admin.modals.updaingSlide')      
    
@section('adminJsFile')
    <!-- General JS Scripts -->
    <script src="../assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="../assets/bundles/datatables/datatables.min.js"></script>
    <script src="../assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="../assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="../assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../assets/js/custom.js"></script>
    <script>
         $(function () {
        setTimeout(function () {
           if ($(".alert").is(":visible")){
                //you may add animate.css class for fancy fadeout
               $(".alert").fadeOut("fast");
                            }
                        }, 2000)

                  });
    </script>
    
@endsection
