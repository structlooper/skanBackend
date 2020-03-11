@extends('admin.layouts.sideBar')
@section('adminTitle')
    Title
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
                <div class="card-header" >
                  <h4>Registered Sub Admins</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      {{-- <a href="#" class="btn btn-lg btn-primary ml-4 showModal"  style="float: right;">Add Values</a> --}}
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User Id</th>
                              <th>mobile</th>
                              <th>Profile</th>
                              <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $key=> $item)
                          @if ($item->is_admin == 'admin')
                              
                         
                          <tr>
                            
                              <td class="align-middle">
                                {{$item->firstName}} {{$item->lastName }}
                              </div>
                            </td>
                            <td>
                              {{$item->email}}
                            </td>
                            <td>
                              {{$item->userId}}
                            </td>
                            <td>
                             {{ $item->mobile }}
                              </td>
                            <td>
                             {{ $item->is_admin }}
                              </td>
                            <td><a href="updateDetailsPage/{{$item->id}}" class="btn btn-warning">Edit</a> </td >
                          </tr>
                          @endif
                          @endforeach
                        </tbody>
                      </table>
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
    <!-- Page Specific JS File -->
    <script src="../assets/js/page/datatables.js"></script>
    <!-- Custom JS File -->
    
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
