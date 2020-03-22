@extends('admin.layouts.sideBar')
@section('adminTitle')
    S-Admins
@endsection

@section('adminStyleCss')

  <!-- General CSS Files -->
  <link rel="stylesheet" href={{ url("public/ssets/bundles/datatables/datatables.min.css") }}>
  <link rel="stylesheet" href={{ url("public/ssets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css") }}>
  
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
                  <div class="card-body" style="margin:0%">
                    <div class="table-responsive">
                      
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>#</th>
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
                            @if (Auth::user()->id == $item->id)
                            @continue
                            @endif 
                         
                          <tr>
                            <td>{{ $key }} </td>
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
                            <td><a href="{{ url('updateDetailsPage') }}/{{$item->id}}" class="btn btn-warning">EDIT</a> </td >
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
    <script src={{ url("public/assets/bundles/datatables/datatables.min.js") }}></script>
    <script src={{ url("public/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js") }}></script>
    <script src={{ url("public/assets/bundles/jquery-ui/jquery-ui.min.js") }}></script>
    <!-- Page Specific JS File -->
    <script src={{ url("public/assets/js/page/datatables.js") }}></script>
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
