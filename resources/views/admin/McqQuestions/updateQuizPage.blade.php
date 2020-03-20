@inject('carbon', 'Carbon\Carbon')
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
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  
@endsection

@section('adminSide')
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
        <!-- Main Content -->
        <div class="main-content">
          <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm-8">
          <div class="card">
            <section class="section py-4 px-4">
              <div class="section-body">
                <form action="{{  url('updatationQuizQuestion') }}/{{$updateQuiz->id}}" method="POST">
                  @csrf
                  @method('PUT')
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
                    <div class="col-sm-2">
                      <a href="{{  url('createQuiz') }}/{{$id}}" class="btn btn-success ">Go Back</a>
                    </div>
                    <div class="col-sm">

                      <h1 class="form-group">Update Question</h1>
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <label>Question</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control" value='{{ $updateQuiz->question }} ' required  name="question">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>option 1</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control" value='{{ $updateQuiz->option1 }} ' required  name="option_1">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>option 2</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control" value='{{ $updateQuiz->option2 }} ' required  name="option_2">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>option 3</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control" value='{{ $updateQuiz->option3 }} '  name="option_3">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>option 4</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control" value='{{ $updateQuiz->option4 }} '  name="option_4">
                    </div>
                  </div>
                  
                  <div class="form-group">
                      <label>Answer</label>
                      <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <select class="form-control"   name="answer" id="">
                        <option value="{{ $updateQuiz->answer }} ">{{ $updateQuiz->answer }}</option>
                        @if ($updateQuiz->answer === 'option_1')
                        <option value="option_2" >option 2</option>
                        <option value="option_3" >option 3</option>
                        <option value="option_4" >option 4</option>
                        
                        @elseif ($updateQuiz->answer === 'option_2')
                        <option value="option_2" >option 1</option>
                        <option value="option_3" >option 3</option>
                        <option value="option_4" >option 4</option>
                       
                        @elseif ($updateQuiz->answer === 'option_3')
                        <option value="option_2" >option 1</option>
                        <option value="option_3" >option 2</option>
                        <option value="option_4" >option 4</option>
                       
                        @elseif ($updateQuiz->answer === 'option_4')
                        <option value="option_2" >option 1</option>
                        <option value="option_4" >option 2</option>
                        <option value="option_3" >option 3</option>
                            
                        @else
                            
                        @endif
                        
                      </select>
                  </div>
                  </div>
                      <div class="form-group">
                        <label>Description</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                          </div>
                          <div class="form-group">
          
                            <textarea name="desc" id="" rows="5" cols="100" style="width: 100%">{{ $updateQuiz->desc }}</textarea>
                          </div>
                        </div>
                      </div>
              
                 
                  
                  <button type="submit" class="btn btn-lg btn-primary m-t-15 waves-effect">Update</button>
                </form>
            

              </section>
            </div>
          </div>
          <div class="col-sm"></div>
          </div>
        </div>
        </div>
      </div>
    </div>
          


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