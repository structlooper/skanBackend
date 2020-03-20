@extends('admin.layouts.sideBar')
@section('adminTitle')
    Terms And Conditions
@endsection

@section('adminStyleCss')

<link rel="stylesheet" href={{ url("public/assets/bundles/summernote-master/dist/summernote.min.css") }}>
<link rel="stylesheet" href={{ url("public/assets/bundles/codemirror/lib/codemirror.css") }}>
<link rel="stylesheet" href={{ url("public/assets/bundles/codemirror/theme/duotone-dark.css") }}>
<link rel="stylesheet" href={{ url("public/assets/bundles/jquery-selectric/selectric.css") }}>

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
                <div class="card col-sm-8">
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
                  <div class="card-body px-2 py-2">
                    <div class="table-responsive">
                      
                        @foreach ($datas as $data)
                            

                        <form method="post"  action="updationTermsData/{{ $data->id }}" >
                            @csrf
                            @method('PUT')
                            <h2>Terms And condition Edit</h2>
                                <div class="form-group clearfix">
                                  <div class="col-sm-12 col-md-12">
                                  <textarea name="content" class="summernote">{{$data->content}}</textarea>
                                  </div>
                                  </div>
                                  
                            <div class="col-sm-12 padd">
                              <input type="submit" class="btn btn-warning btn-lg" >
                              </div>
                    </form>

                    @endforeach
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
  <script src={{ url("public/assets/bundles/summernote-master/dist/summernote.min.js") }}></script>
  <script src={{ url("public/assets/bundles/codemirror/lib/codemirror.js") }}></script>
  <script src={{ url("public/assets/bundles/codemirror/mode/javascript/javascript.js") }}></script>
  <script src={{ url("public/assets/bundles/jquery-selectric/jquery.selectric.min.js") }}></script>
  <!-- Custom JS File -->
  <script src={{ url("public/assets/js/custom.js") }}></script>
      
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
