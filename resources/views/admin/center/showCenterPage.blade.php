@extends('admin.layouts.sideBar')
@section('adminTitle')
 Center Management
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
                  <div class="card-header" >
                    <h4>Center Management</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <a href="#" class="btn btn-lg btn-primary ml-4 showModal"  style="float: right;">Add Center</a>
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                            
                            <th>#</th>
                            <th>Center Name</th>
                            <th>Description</th>
                            <th>added Date</th>
                            <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($datas as $key=> $item)
                              
                          <tr>
                            
                            <td>{{$key+1}} </td >
                            <td class="align-middle">
                              {{$item->centerName}}
                            </td>
                            <td>
                              {{$item->desc}}
                            </td>
                            <td>{{date('d M, Y', strtotime($item->created_at))}}</td>
                          <td>
                            <a href="centerDelete" dele-id='{{$item->id}}'   class="btn btn-danger comDel" ><i class="material-icons deleteModal">delete</i>
                          </td>
                          </tr>
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
  @include('admin.modals.addCenterModal')
@endsection
@section('adminJsFile')
    <script src={{ url("public/assets/bundles/datatables/datatables.min.js")}}></script>
    <script src={{ url("public/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js")}}></script>
    <script src={{ url("public/assets/bundles/jquery-ui/jquery-ui.min.js")}}></script>
    <!-- Page Specific JS File -->
    <script src={{ url("public/assets/js/page/datatables.js")}}></script>
    
    <script>
        $('.showModal').click(function(e){
                e.preventDefault()
                $('#exampleModal').modal('show')
              })
        $('.deleteModal').click(function(e){
                e.preventDefault()
                $('#basicModal').modal('show')
              })


      
      $('.comDel').click(function(e){
        e.preventDefault()
        let id = $(this).attr('dele-id')
        $.ajax({
                    url: "{{ url('spiCenter') }}" + '/' + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                    let dct = $('.comDel').attr('href')
                    
                    $('#delete12').attr('action', dct + '/' + data.id )
                    $('#basicModal').modal('show')
                    }
        })
      })
     

      $(function () {
        setTimeout(function () {
           if ($(".alert").is(":visible")){
               $(".alert").fadeOut("fast");
                            }
                        }, 2000)

                  });
                 
        
    </script>
 @endsection
