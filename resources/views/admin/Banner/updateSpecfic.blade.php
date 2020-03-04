@extends('admin.layouts.sideBar')
@section('adminTitle')
    Title
@endsection

@section('adminStyleCss')

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

@endsection
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
                                <form method="post"  action="updationData/{{ $data->id }}" enctype="multipart/form-data" >
                                        @csrf
                                        <h2>Edit Slide Details</h2>
                                        <div class="col-sm-10 ml-3 control-label border">
                                            {{-- <img src="{{ url('uploades/bannerImages/' . $data->image) }}"  style=" height: 200px;"> --}}
                                          <label for="">upload new image</label>
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
                                              <input required  type="text" class="heading-1-text" value="{{$data->heading}}" maxlength="100"    name='heading' >
                                              </div>
                                            </div>
                                            
                                            <div class="form-group clearfix">
                                                <label class="col-sm-12 control-label ">
                                                  Slide image details
                                                </label>
                                                <div class="mx-2">
                                                <textarea name="desc"  rows="5" cols="50">{{$data->desc}}</textarea>
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
        
    
@section('adminJsFile')
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="assets/bundles/datatables/datatables.min.js"></script>
    <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <!-- Page Specific JS File -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
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
