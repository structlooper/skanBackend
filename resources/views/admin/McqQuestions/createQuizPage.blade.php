@extends('admin.layouts.sideBar')

@section('adminTitle')
    Create MCQs
@endsection

@section('adminStyleCss')

  <!-- General CSS Files -->
  <link rel="stylesheet" href={{ url("public/assets/css/app.min.css") }}>
  <link rel="stylesheet" href={{ url("public/assets/bundles/datatables/datatables.min.css") }}>
  <link rel="stylesheet" href={{ url("public/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css") }}>
  <!-- Template CSS -->
  <link rel="stylesheet" href={{ url("public/assets/css/style.css") }}>
  <link rel="stylesheet" href={{ url("public/assets/css/components.css") }}>
  <!-- Custom style CSS -->
  <link rel="stylesheet" href={{ url("public/assets/css/custom.css") }}>
  
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
                  <div class="col-sm"></div>
                    <div class="card col-sm-12">
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
                        <h4>Add Question</h4>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <a href="#" class="btn btn-lg btn-success ml-4 showModal" data-toggle="modal" data-target="#addQuizModal" style="float: right;"><i data-feather="plus-circle"></i> Add Question</a>
                         
                          <table class="table table-striped" id="table-2">
                            <thead>
                              <tr>
                                
                                <th>&&</th>
                                <th>Category</th>
                                <th>Question</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                                <th>Answer</th>
                                <th>Description</th>
                                <th>Action</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              {{-- {{ $key = 0 }} --}}
                              @foreach ($datas as $key=> $item)
                              
                              <tr>
                                
                                <td>{{ $key + 1 }}</td >
                                <td>{{ $item->questionName }}</td >
                                <td class="align-middle">
                                  {{$item->question}}
                                  </div>
                                </td>
                                <td>
                                  {{$item->option1}}
                                </td>
                                <td>
                                  {{$item->option2}}
                                </td>
                                <td>
                                  {{$item->option3}}
                                </td>
                                <td>
                                  {{$item->option4}}
                                </td>
                                <td>
                                  {{$item->answer}}
                                </td>
                                <td>{{$item->desc}}</td>
                                <td>
                                    <a href="{{  url('updateMcqsQuizQuestion') }}/{{$item->id}}" class="btn btn-primary"><i class="
                                      far fa-edit" ></i></a>
                                    
                                      <form action="{{  url('deleteMcqsQuizQuestion') }}/{{$item->id}}" method="post"> @csrf @method('DELETE') <button type="submit" class="btn btn-danger btn-sm"><i class="material-icons deleteModal">delete</i></button> </form>
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
<script src={{ url("public/assets/bundles/datatables/datatables.min.js") }}></script>
<script src={{ url("public/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js") }}></script>
<script src={{ url("public/assets/bundles/jquery-ui/jquery-ui.min.js") }}></script>
<!-- Page Specific JS File -->
<script src={{ url("public/assets/js/page/datatables.js") }}></script>
<script>

    $(function () {
        setTimeout(function () {
           if ($(".alert").is(":visible")){
               $(".alert").fadeOut("fast");
                            }
                        }, 2000)

                  });
    </script>
@endsection