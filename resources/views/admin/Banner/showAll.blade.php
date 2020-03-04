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

  {{-- <div class="loader"></div> --}}
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
                    <h4>Slide uploaded details</h4>
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
                            <img class="featurette-image img-fluid mx-auto py-1"  alt="image" src="{{ url('uploades/bannerImages/' . $item->image) }}"  style=" height: 200px;">                            
                          </td>
                            <td>
                              <a href="updatePage/{{$item->id}}"  class="btn btn-warning"><i class="
                                far fa-edit" >edit</i></a>
                            </td>
                          <td>
                            <a href="delete" dele-id='{{$item->id}}'   class="btn btn-danger comDel" ><i class="material-icons deleteModal">delete</i>
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
  
{{-- 
  This file containing the modal of adding values in the table via modal
  
  --}}
  @include('admin.modals.addingValues')


   
        
    
        @section('adminJsFile')
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="assets/bundles/datatables/datatables.min.js"></script>
    <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/datatables.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    
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
                    url: "{{ url('data') }}" + '/' + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                    console.log(data)
                    let dct = $('.comDel').attr('href')
                    
                    $('#delete12').attr('href', dct + '/' + data.id )
                    $('#basicModal').modal('show')
                    // window.location.reload()
                    }
        })
      })
     

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
