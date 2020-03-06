@extends('admin.layouts.sideBar')
@section('adminTitle')
    SubAdmin | Register
@endsection

@section('adminSide')
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3"></div>
          <div class="col-12 col-sm-10 mt-4 ml-4 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
              
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

            <div class="card card-primary">
              <div class="card-header">
                <h4>Register New Admin</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="newAdminReg">
                    @csrf
                    @method('POST')
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="firstName" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="lastName">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                        <label for="mobile" class="d-block">Mobile</label>
                        <input id="mobile" type="mobile" class="form-control" name="mobile">
                    </div>
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                   
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection

@section('adminJsFile')
 <!-- General JS Scripts -->
 <script src="../assets/js/app.min.js"></script>
 <!-- JS Libraies -->
 <script src="../assets/bundles/datatables/datatables.min.js"></script>
 <script src="../assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
 <script src="../assets/bundles/jquery-ui/jquery-ui.min.js"></script>
 <!-- Page Specific JS File -->
 <script src="../assets/js/page/datatables.js"></script>
 <!-- Template JS File -->
 <script src="../assets/js/scripts.js"></script>
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