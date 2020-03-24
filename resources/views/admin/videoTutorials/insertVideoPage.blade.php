@extends('admin.layouts.sideBar')
@section('adminTitle')
    Insert Tutorials
@endsection

@section('adminStyleCss')


   <link rel="stylesheet" href={{ url("public/assets/css/custom.css") }}>
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

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
                    <div class="border card col-sm-7">
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
                            <div class="container  pt-2">
                            <form method="post"  action="{{route('insertionVideo')}}" enctype="multipart/form-data" >
                                        @csrf
                                        <h2>Insert Video Tutorials</h2>
                                            <div class="form-group ">
                                              <label class="col-sm-12 control-label ">
                                                Name
                                              </label>
                                              <div class="col-sm-12">
                                                <input required  type="text" class="heading-1-text form-control" name='name' >
                                              </div>
                                            </div>

                                             <div class="form-group ">
                                              <label class="col-sm-12 control-label ">
                                                Source
                                              </label>
                                              <div class="col-sm-12">
                                                <select class="form-control" name='source' id="Study_material_options">
                                                  @foreach ($datas as $key => $data)
                                                  {{-- <option>Select Source</option> --}}
                                                  <option value="{{ $data->source }}">{{ $data->source }}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                            </div>

                                            <div class="form-group ">
                                              <label class="col-sm-12 control-label ">
                                                Category
                                              </label>
                                              <div class="col-sm-12">
                                                  <select  class="form-control form-control-sm" name="category" >
                                                    @foreach ($datas as $key => $data)
                                                  <option value="{{ $data->id }}">{{ $data->category }}</option>
                                                  @endforeach
                                                  </select>
                                                </select>
                                              </div>
                                            </div>


                                            <div class="form-group ">
                                              <label class="col-sm-12 control-label ">
                                                Video Document
                                              </label>
                                              <div class="col-sm-12">
                                                  <select  class="form-control" name="typeVideo" id="second_select" >
                                                  <option class="form-control" value="video">Upload Video</option>
                                                  <option class="form-control" value="link">Insert Link</option>
                                                  </select>
                                              </div>
                                            </div>


                                              <label class="col-sm-12 control-label text-dark" for="">Upload video</label>
                                            <div class="col-sm-11 ml-3  ">
                                              <div class="col-sm-6 ml-2 ">
                                                <input  type="file" id="disVideo" name="video" />
                                              </div>
                                            </div>


                                            <div class="form-group ">
                                              <label class="col-sm-12 control-label ">
                                                Link
                                              </label>
                                              <div class="col-sm-12">
                                                <input   type="text" id="disLink" disabled class="heading-1-text form-control" name='link' >
                                              </div>
                                            </div>
                                            <br>
                                            <div class="form-group  ml-2">
                                                <label class="col-sm-12 control-label ">
                                                  Description
                                                </label>
                                                <div class="mx-2">
                                                    <textarea name="desc" class="form-control" rows="4" cols="40"></textarea>
                                                  </div>
                                              </div>
                                              
                                        <div class="col-sm-12 padd">
                                          <input type="submit" value="Save Now" class="btn btn-primary btn-lg" >
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
    
@section('adminJsFile')
    <script>
      
         $(function () {
        setTimeout(function () {
           if ($(".alert").is(":visible")){
               $(".alert").fadeOut("fast");
                            }
                        }, 2000)

                  });


         $('#second_select').change(function() {
                  if( $(this).val() == "video") {       
                      $('#disVideo').prop( "disabled", false );
                      $('#disLink').prop( "disabled", true );
                  }
                  if( $(this).val() == 'link') {
                      // console.log($(this).val())
                      $('#disLink').prop( "disabled", false );
                      $('#disVideo').prop( "disabled", true );
                  } 
                })
    </script>
    
@endsection
