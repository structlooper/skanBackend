@extends('admin.layouts.sideBar')

@section('adminTitle')
    Update Silde Delail
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
                      
                      <div class="card-body">
                        <div class="table-responsive">
                            <div class="container border rounded pt-2">
                                <form method="post"  action="{{ url('updatationStudyMaterial') }}/{{ $data->id }}" enctype="multipart/form-data" >
                                        @csrf
                                        @method('PUT')
                                        <h2>Update Study Materials</h2>
                                        <label class="col-sm-12 control-label text-dark" for="">
                                            Slide Image
                                        </label>
                                        <div class="col-sm-10 ml-3 control-label ">
                                          <div class="col-sm-6 form-control ml-2">
                                            <input  type="file"   name="image" />
                                          </div>
                                        </div>
                                        <br>

                                        <label class="col-sm-12 control-label text-dark" for="">
                                            Other Attachment
                                        </label>
                                        <div class="col-sm-10 ml-3 control-label ">
                                          <div class="col-sm-6 form-control ml-2">
                                            <input  type="file"   name="attachment" />
                                          </div>
                                        </div>
                                        <br>
                                            <div class="form-group ">
                                              <label class="col-sm-12 control-label ">
                                                Title  
                                            </label>
                                              <div class="col-sm-12">
                                              <input type="text" class="form-control" value="{{$data->title}}">
                                              </div>
                                            </div>
                                            
                                            <div class="form-group ">
                                                <label class="col-sm-12 control-label ">
                                                  Description
                                                </label>
                                                <div class="mx-2 px-2">
                                                <textarea name="desc" class="form-control " rows="5" cols="50">{{$data->desc}}</textarea>
                                                  </div>
                                              </div>
                                              
                                        <div class="col-sm-12 py-2">
                                          <input type="submit" value="Update" class="btn btn-primary btn-lg" >
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
          
      @include('admin.modals.updaingSlide')      
@endsection

    
@section('adminJsFile')
    <!-- JS Libraies -->
    <script src={{ url("public/assets/bundles/datatables/datatables.min.js") }}></script>
  
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
