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
                  <h4>About uploaded details</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      {{-- <a href="#" class="btn btn-lg btn-primary ml-4 showModal"  style="float: right;">Add Values</a> --}}
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                            <th>&&</th>
                            <th>Heading</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Action</th>
                            <th></th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $key=> $item)
                          
                          <tr>
                            <td>{{$key+1}} </td >
                              <td class="align-middle">
                                {{$item->heading}}
                              </div>
                            </td>
                            <td>
                              {{$item->desc}}
                            </td>
                            <td>
                              {{-- <td>{{date('d M, Y', strtotime($item->created_at))}}</td> --}}
                              <img class="featurette-image img-fluid mx-auto py-1"  alt="image" src="{{ url('uploades/AboutSideImage/' . $item->image) }}"  style=" height: 200px;">                            
                            </td>
                            <td>
                              <a href="updateAboutData/{{$item->id}}"  class="btn btn-warning"><i class="
                                far fa-edit" >edit</i></a>
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
@endsection
{{-- Delete Conformation model --}}
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      Are you sure want to delete this record?
    </div>
    <div class="modal-footer bg-whitesmoke br">
      
      <a href="delete" class="btn btn-Danger" id="delete12">Yes</a>
      
      
    </div>
  </div>
</div>
</div>
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
