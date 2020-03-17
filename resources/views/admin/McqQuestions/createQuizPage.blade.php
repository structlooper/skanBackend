@extends('admin.layouts.sideBar')

@section('adminTitle')
    Create MCQs
@endsection

@section('adminStyleCss')

  <!-- General CSS Files -->
  <link rel="stylesheet" href={{ url("assets/css/app.min.css") }}>
  <link rel="stylesheet" href={{ url("assets/bundles/datatables/datatables.min.css") }}>
  <link rel="stylesheet" href={{ url("assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css") }}>
  <!-- Template CSS -->
  <link rel="stylesheet" href={{ url("assets/css/style.css") }}>
  <link rel="stylesheet" href={{ url("assets/css/components.css") }}>
  <!-- Custom style CSS -->
  <link rel="stylesheet" href={{ url("assets/css/custom.css") }}>
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
                        <h4>{{ $categoryData->category }} Category</h4>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <a href="#" class="btn btn-lg btn-primary ml-4 showModal" data-toggle="modal" data-target="#addQuizModal" style="float: right;"><i data-feather="plus-circle"></i> Add Question</a>
                         
                          <table class="table table-striped" id="table-2">
                            <thead>
                              <tr>
                                <th class="text-center pt-3">
                                  <div class="custom-checkbox custom-checkbox-table custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                      class="custom-control-input" id="checkbox-all">
                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                  </div>
                                </th>
                                <th>&&</th>
                                <th>Question Name</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                                <th>Answer</th>
                                <th>added Date</th>
                                <th>Action</th>
                                {{-- <th></th> --}}
                                
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($datas as $key=> $item)
                                  
                              <tr>
                                <td class="text-center pt-2">
                                  <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                      id="checkbox-1">
                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                  </div>
                                </td>
                                <td>{{$key+1}} </td >
                                <td class="align-middle">
                                  {{$item->source}}
                                  </div>
                                </td>
                                <td>
                                  {{$item->category}}
                                </td>
                                <td>{{date('d M, Y', strtotime($item->created_at))}}</td>
                                <td>
                                  <a href="#" data-id='{{$item->id}}' class="btn btn-warning Del viewData"><i class="
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
@include('admin.modals.Mcqs.createQuizModal')
@endsection

@section('adminJsFile')
<script src={{ url("assets/bundles/datatables/datatables.min.js") }}></script>
<script src={{ url("assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js") }}></script>
<script src={{ url("assets/bundles/jquery-ui/jquery-ui.min.js") }}></script>
<!-- Page Specific JS File -->
<script src={{ url("assets/js/page/datatables.js") }}></script>
<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

    $(function () {
        setTimeout(function () {
           if ($(".alert").is(":visible")){
               $(".alert").fadeOut("fast");
                            }
                        }, 2000)

                  });



    
       
    </script>
@endsection