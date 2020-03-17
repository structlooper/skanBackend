@extends('admin.layouts.sideBar')
@section('adminTitle')
    View Details
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

  <style>
    .font{
      font-size: large;
    }
  </style>
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
                  <div class="col-sm-3"></div>
                    <div class="card col-sm-6">
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
                            <div class="container border rounded pt-2 font">
                              <div class="row border-bottom">
                                <div class="col-sm">
                                  <a href="#" class="btn btn-warning backLink">Go Back</a>
                                </div>
                                <div class="col-sm-9">
                                  <h2 class="text-left  mb-2">View Records</h2>
                                </div>
                              </div>
                                        
                                           
                                           
                                           
                                            <div class="form-group clearfix">
                                              <label class="col-sm-12 control-label text-center">
                                                <img class="featurette-image img-fluid mx-auto py-1"  alt="image" src="{{ url('uploades/profileImages/' . $user->Image) }}"  style=" height: 200px;">                            
                                              </label>
                                            </div>

                                            <div class="form-group clearfix">
                                              <label class="col-sm-12 control-label ">
                                                <div class="row">
                                                  <div class="col-sm-auto font">

                                                   <b> Name </b> : {{$user->firstName}} {{$user->lastName}}
                                                  </div>
                                                 
                                                </div>
                                              </label>
                                            </div>
                                            <div class="form-group clearfix">
                                              <label class="col-sm-12 control-label ">
                                                <div class="row">
                                                  
                                                  <div class="col-sm-auto font">
                                                   <b> Email </b>: {{$user->email}}

                                                  </div>
                                                </div>
                                              </label>
                                            </div>

                                            <div class="form-group clearfix">
                                              <label class="col-sm-12 control-label ">
                                                <div class="row">
                                                  <div class="col-sm-auto font">

                                                   <b> Mobile </b>: {{$user->mobile}}
                                                  </div>
                                                  
                                                </div>
                                              </label>
                                            </div>
                                            <div class="form-group clearfix">
                                              <label class="col-sm-12 control-label ">
                                                <div class="row">
                                                  
                                                  <div class="col-sm-auto font">
                                                   <b> profile </b>: {{$user->is_admin}}

                                                  </div>
                                                 
                                                </div>
                                              </label>
                                            </div>
                                            <div class="form-group clearfix">
                                              <label class="col-sm-12 control-label ">
                                                <div class="row">
                                                  
                                                  <div class="col-sm-auto font">

                                                   <b> User_id </b>: {{$user->userId}}
                                                  </div>  
                                                </div>
                                              </label>
                                            </div>
                                            
                                            <div class="form-group clearfix">
                                              <label class="col-sm-12 control-label ">
                                                <div class="row">
                                                  
                                                  <div class="col-sm-auto font">
                                                   <b> Address </b>: {{$user->address}}

                                                  </div>
                                                 
                                                </div>
                                              </label>
                                            </div>
                                            <div class="form-group clearfix">
                                              <label class="col-sm-12 control-label ">
                                                <div class="row">

                                                  <div class="col-sm-auto font">
                                                    <b> PinCode </b>: {{$user->pinCode}}
                                                </div>

                                                  </div>
                                                </label>
                                             
                                            </div>
                                            
                                            <div class="form-group clearfix">
                                              <label class="col-sm-12 control-label ">
                                                <div class="row">
                                                  
                                                  <div class="col-sm-auto font">
                                                   <b> Profile_created </b>: Profile created on {{date('d M, Y', strtotime($user->created_at))}}

                                                  </div>
                                                </div>
                                              </label>
                                            </div>
                                            
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

    
    
@section('adminJsFile')
    <!-- JS Libraies -->
    <script src="../assets/bundles/datatables/datatables.min.js"></script>
    <script src="../assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="../assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="../assets/js/page/index.js"></script>
  <!-- Custom JS File -->
  <script src="../assets/js/custom.js"></script>
    <script>
         $(function () {
        setTimeout(function () {
           if ($(".alert").is(":visible")){
               $(".alert").fadeOut("fast");
                            }
                        }, 2000)

                  });

                  $(document).ready(function(){
                  $('.backLink').click(function(){
                      parent.history.back();
                      return false;
                  });
              });
    </script>
    
@endsection