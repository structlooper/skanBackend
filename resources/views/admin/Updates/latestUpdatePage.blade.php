@extends('admin.layouts.sideBar')
@section('adminTitle')
	Latest Updates
@endsection

@section('adminStyleCss')

  <!-- General CSS Files -->
  <link rel="stylesheet" href={{ url("public/assets/css/app.min.css") }}>
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
              <div class="col-sm-1"></div>
              <div class="card col-sm-10">
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
                	<div class="row">
                <div class="card-header" >
                		<div class="col-sm">
                  			<h4>Latest Updates</h4>
                		</div>
                			<div class="col-sm-4">
                				<a href="#" class="btn btn-lg btn-primary ml-4 showModal" data-toggle="modal" data-target="#addUpdateModal" style="float: right;"><i data-feather="plus-circle"></i>  Add  </a>
                			</div>
                	</div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                          	  <th scope="col">#</th>
                              <th scope="col">Title</th>
                              <th scope="col">link</th>
                              <th scope="col">Description</th>
                              <th scope="col">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($datas as $key=> $item)
                          
                              		
                         
                          <tr>
                             <th scope="row">{{ $key+1 }}</th>
                              <td >
                                {{$item->title}} 
                             
                            </td>
                            <td>


                              {{$item->link}}
                            </td>
                            <td>
                             {{ $item->desc }}
                              </td>
                            <td>
                            	<a href="{{ url('editUpdates') }}/{{ $item->id }}" class="btn btn-primary"><i class="material-icons editModal">edit</i></a>
                            	<form action="{{ url('deleteUpdates') }}/{{ $item->id }}" method="post"> @method('DELETE')@csrf <button type="submit" class="btn btn-danger mt-2" ><i class="material-icons deleteModal">delete</i></button> </form>
                            </td >
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            	</div>
            	</div>
              </section>
              </div>
            </div>
            
          </div>
          @include('admin.modals.insertUpdatesModel')
          
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

                      $(document).ready(function(){
                      $('[data-toggle="tooltip"]').tooltip();   
                      });
    </script>
 @endsection