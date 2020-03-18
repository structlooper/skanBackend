@extends('admin.layouts.sideBar')

@section('adminTitle')
    MCQs Questions
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
<div class="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <div class="main-content">
            <section class="section">
              <div class="section-body">
                  
                    <div class="row">
                      <div class="col-sm"></div>
                        <div class="card col-sm-9">
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
                            <h4>Question Management</h4>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <a href="#" class="btn btn-lg btn-primary ml-4 showModal" data-toggle="modal" data-target="#exampleModal" style="float: right;"><i data-feather="plus-circle"></i> Add Category</a>
                             
                              <table class="table table-striped" id="table-2">
                                <thead>
                                  <tr>
                                    
                                    <th>&&</th>
                                    <th>Name</th>
                                    <th>Question Category</th>
                                    <th>Time</th>
                                    <th>Add Question</th>
                                    <th>Action</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($datas as $key=> $item)
                                  
                                      
                                  
                                  <tr>
                                    
                                    <td>{{ $key + 1 }}</td >
                                    <td>{{ $item->questionName }}</td >
                                    <td class="align-middle">
                                      {{$item->category}}
                                    </td>
                                    <td>
                                      {{$item->timeDuration}}
                                    </td>
                                      <td><a href="createQuiz/{{ $item->id}}" class="btn btn-success"><i data-feather="file-plus"> </i>Add</a></td>
                                    
                                 
                                
                                    <td>
                                      <div class="row" style="margin: 0;">
                                            <div class="col-sm-6">
                                              <a href="{{  url('updateMcqsQuizQuestion') }}/{{$item->id}}" class="btn btn-primary"><i class="
                                                far fa-edit" >edit</i></a>
                                            </div>
                                            <div class="col-sm-6">
                                              <form action="{{  url('deleteMcqsQuizQuestion') }}/{{$item->id}}" method="post"> @csrf @method('DELETE') <button type="submit" class="btn btn-danger btn-sm"><i class="material-icons deleteModal">delete</i></button> </form>
                                            </div>
                                            
                                        
                                        </div>      
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-2"></div>
              </div>
            </section>
        </div>
    {{-- </div> --}}
</div>

@include('admin.modals.Mcqs.addCategoryModal')
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