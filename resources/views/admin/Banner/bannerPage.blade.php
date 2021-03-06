@extends('admin.layouts.sideBar')
@section('adminTitle')
    Insert Banner 
@endsection

@section('adminStyleCss')

  <!-- General CSS Files -->
  <link rel="stylesheet" href={{ url("public/assets/bundles/datatables/datatables.min.css") }}>
  <link rel="stylesheet" href={{ url("public/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css") }}>
  

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
                            <div class="container border rounded pt-2">
                                <form method="post"  action="{{ route('InsertionBannnerData')}}" enctype="multipart/form-data" >
                                        @csrf
                                        <h2>Slide Details upload</h2>
                                        <div class="col-sm-10 ml-3 control-label border">
                                          <label for="">upload image</label>
                                          <div class="col-sm-6 ml-2">
                                            <input required type="file" name="image" />
                                          </div>
                                        </div>
                                        <br>
                                            <div class="form-group clearfix">
                                              <label class="col-sm-12 control-label ">
                                                Slide Image Heading
                                              </label>
                                              <div class="col-sm-12">
                                                <input required  type="text" class="heading-1-text form-control bg-light " placeholder="Heading" maxlength="100"    name='heading' >
                                              </div>
                                            </div>
                                            
                                            <div class="form-group clearfix">
                                                <label class="col-sm-12 control-label ">
                                                  Slide image details
                                                </label>
                                                <div class="mx-2">
                                                    <textarea name="desc"  rows="5" cols="50"></textarea>
                                                  </div>
                                              </div>
                                              
                                        <div class="col-sm-12 padd">
                                          <input type="submit" value="Save Now" class="btn btn-warning btn-lg" >
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
      </div>
      
@endsection     
    
@section('adminJsFile')
   <!-- JS Libraies -->
   <script src={{ url("assets/bundles/datatables/datatables.min.js")}}></script>
   <script src={{ url("assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js")}}></script>
   <script src={{ url("assets/bundles/jquery-ui/jquery-ui.min.js")}}></script>
   <!-- Page Specific JS File -->
   <script src={{ url("assets/js/page/datatables.js")}}></script>
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
{{-- <h1>banner page</h1> --}}